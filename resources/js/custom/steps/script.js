import {initEventsList, getOperators, getUsers, initPlugins, displayAlert, loadData} from '../functions';

$(() => {

    getOperators();
    getUsers();
    initEventsList();
    initPlugins();

    $('.cancel').on('click', function (e) {
        $('.operators_list').val(null).trigger('change');
        $('.msn_list').val(null).trigger('change');
        $(".review-section").addClass("disabled");
        $('.msn_list').attr('disabled', true);
    });
    $('.search').on('click', function (e) {

        // Fetch data by OPERATOR & MSN
        let params = $('.msn_list').select2('data')[0];
        localStorage.setItem('msn', JSON.stringify(params));
        $.ajax({
            url: '/api/data/steps/1',
            data: {msn_id: params.id},
            success: function (response) {
                if (response.data.length == 0) {
                    return
                }
                let data = response.data[0]
                let columns_names = JSON.parse($('#columns_names').val())[1]['items'];

                for (const property in columns_names) {
                    for (const sub_property in columns_names[property]) {
                        if (data[sub_property]) {
                            $(`#${sub_property}_input`).attr('readonly', true).val(`${data[sub_property] ?? ''}`);
                        } else {
                            $(`#${sub_property}_form-control`).addClass('d-none')
                            $(`#${sub_property.toLowerCase()}_wrapper`).addClass('d-none')
                        }
                    }
                }
                // if(data.ESN3_ID == null || data.ESN3_ID == '') {
                //     $('#engine-3').addClass('d-none');
                // }
                // if(data.ESN4_ID == null || data.ESN4_ID == '') {
                //     $('#engine-4').addClass('d-none');
                // }
                // if(data.MAIN_LDG_LH2_SN == null || data.MAIN_LDG_LH2_SN == '') {
                //     $('#ldg-lh2').addClass('d-none');
                // }
                // if(data.MAIN_LDG_LH3_SN == null || data.MAIN_LDG_LH3_SN == '') {
                //     $('#ldg-lh3').addClass('d-none');
                // }
                // if(data.MAIN_LDG_RH2_SN == null || data.MAIN_LDG_RH2_SN == '') {
                //     $('#ldg-rh2').addClass('d-none');
                // }
                // if(data.MAIN_LDG_RH3_SN == null || data.MAIN_LDG_RH3_SN == '') {
                //     $('#ldg-rh3').addClass('d-none');
                // }
            }
        });
    });
    $('.update').on('click', function (e) {
        e.preventDefault()
        return displayAlert();
        const formData = new FormData($('#form')[0]);
        formData.append('step', '1')
        $.ajax({
            type: 'POST',
            url: '/api/update',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            }
        });
    });

    let columns_names = JSON.parse($('#columns_names').val());
    for (let step in columns_names) {
        loadData(columns_names[step]['items'], step);
    }

});
