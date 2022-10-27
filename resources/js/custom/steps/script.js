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
        let detailsRow = $('.details-row');
        detailsRow.empty().append('<p>Choose an operator + msn to view the details</p>');
        $('.msn_list').attr('disabled', true);
    });
    $('.search').on('click', function (e) {

        // Fetch data by OPERATOR & MSN
        let detailsRow = $('.details-row.step-1');
        let params = $('.msn_list').select2('data')[0];
        localStorage.setItem('msn', JSON.stringify(params));
        let spinner = `<div class="spinner-container d-flex justify-content-center">
                            <div class="spinner-border text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div></div>`;
        detailsRow.html(spinner);
        $.ajax({
            url: '/api/data/steps/1',
            data: {msn_id: params.id},
            success: function (response) {
                detailsRow.empty();
                if (response.data.length == 0) {
                    detailsRow.append('<p>Choose an operator + msn to view the details</p>');
                    return
                }
                let data = response.data[0]
                let html = '';
                let columns_names = JSON.parse($('#columns_names').val())[1]
                console.log(columns_names);

                for (const property in columns_names) {
                    let html_items = '';
                    for (const sub_property in columns_names[property]) {
                        if (data[sub_property]) {
                            html_items += `<div class="col-lg-4 col-md-6 col-12 mb-3">
                                                <label for="${sub_property}" 
                                                class="property-label text-ellipsis mb-1"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" 
                                                title="${columns_names[property][sub_property]}"
                                                >${columns_names[property][sub_property]}</label>
                                                <input type="text" name="${sub_property}" readonly
                                                value="${ data[sub_property] ?? '' }" class="form-control" id="${property}"/>
                                            </div>`
                        }
                    }
                    html += `<div class="content">
                              <!-- Discussion -->
                              <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                  <h3 class="block-title">${property}</h3>
                                </div>
                                <div class="block-content">
                                    <div class="row">${html_items}</div>
                                </div>
                              </div>
                            </div>`;
                }
                detailsRow.append(html);
                $(".review-section").removeClass("disabled");
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

    loadData(3);
    loadData(2)
    loadData(4);

    $('.update').on('click', function (e) {
        e.preventDefault()
        return displayAlert();
        const formData = new FormData(this);
        formData.append('step', 'step2')
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


});
