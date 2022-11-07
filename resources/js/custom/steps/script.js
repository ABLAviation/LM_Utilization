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
        $('.btn.search').attr('disabled', true);
    });
    $('.search').on('click', function (e) {

        // Fetch data by OPERATOR & MSN
        let params = $('.msn_list').select2('data')[0];
        localStorage.setItem('msn', JSON.stringify(params));
        $.ajax({
            url: '/api/data',
            data: {msn_id: params.id},
            success: function (response) {
                if (response.data == null) {
                    displayAlert({class: 'alert-warning', text: 'No Data Found for this MSN !'})
                    return
                }
                let data = response.data;
                let categories = JSON.parse($('#columns_names').val());
                for (let index in categories) {
                    let category = categories[index];
                    let columns_names = category.items;
                    for (const property in columns_names) {
                        for (const sub_property in columns_names[property]) {
                            try {
                                if (data[sub_property]) {
                                    let number = Number(data[sub_property])
                                    let type = 'text';
                                    let readonly = true;
                                    if (!isNaN(number)) {
                                        data[sub_property] = parseInt(number);
                                    } else {
                                        let date = new Date(data[sub_property]);
                                        if (date != 'Invalid Date') {
                                            data[sub_property] = date.toISOString().split('T')[0];
                                            type = 'date';
                                            // readonly = false;
                                        }
                                    }
                                    let subPropertyInput = $(`#${sub_property}_input`);
                                    subPropertyInput.attr('type', type).val(`${data[sub_property] ?? ''}`);
                                    if (index == '1') {
                                        subPropertyInput.attr('readonly', readonly)
                                    }
                                } else {
                                    // $(`#${sub_property}_form-control`).addClass('d-none')
                                    // $(`#${sub_property}_input`).attr('readonly', true)
                                    // $(`#${sub_property.toLowerCase()}_wrapper`).addClass('d-none')
                                }
                            } catch (e) {
                                console.log(e);
                                console.log(sub_property);
                            }
                        }
                    }
                }
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
