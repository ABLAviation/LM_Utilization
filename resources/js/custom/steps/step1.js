import {initEventsList, getOperators, getUsers, initPlugins} from '../functions';

$(() => {

    getOperators();
    getUsers();
    initEventsList();
    initPlugins();

    $('.cancel').on('click', function (e) {
        $('.operators_list').val(null).trigger('change');
        $('.msn_list').val(null).trigger('change');
        $(".review-section").addClass("disabled");
        let detailsRow = $('.details-row');
        detailsRow.empty().append('<p>Choose an operator + msn to view the details</p>');
        $('.msn_list').attr('disabled', true);
    });
    $('.search').on('click', function (e) {

        // Fetch data by OPERATOR & MSN
        let detailsRow = $('.details-row');
        let params = $('.msn_list').select2('data')[0];
        localStorage.setItem('msn', JSON.stringify(params));
        let spinner = `<div class="spinner-container d-flex justify-content-center">
                            <div class="spinner-border text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div></div>`;
        detailsRow.html(spinner);
        $.ajax({
            url: '/api/data/step1',
            data: {msn_id: params.id},
            success: function (response) {
                detailsRow.empty();
                if (response.data.length == 0) {
                    detailsRow.append('<p>Choose an operator + msn to view the details</p>');
                    return
                }
                let data = response.data[0]
                let html = '';
                let columns_names = JSON.parse($('#columns_names').val())
                for (const property in data) {
                    if (data[property]) {
                        html += `<div class="col-lg-4 col-md-6 col-12 mb-3">
                                    <label for="${property}" class="mb-1">${columns_names[property]}</label>
                                    <input type="text" name="${property}"
                                    class="form-control" id="${property}" readonly
                                    value="${data[property] ?? ''}" />
                                </div>`
                    }
                }
                detailsRow.append(html);
                $(".review-section").removeClass("disabled");
            }
        });
    });
    $('#form').on('submit', function (e) {
        e.preventDefault()
        const formData = new FormData(this);
        formData.append('step', 'step1')
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

    $('.search').trigger('click') // testing
});
