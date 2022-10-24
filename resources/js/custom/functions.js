

function initEventsList() {
    // Fetch the MSN LIST by OPERATOR
    $('.operators_list').on("change", function (e) {
        let operator_params = $(this).select2('data')[0];
        localStorage.setItem('operator', JSON.stringify(operator_params));
        $('.msn_list').attr('disabled', false);
        getMsn(operator_params);
    });

    $(document).on('select2:open', () => {
        $('.select2-search__field').focus();
    });
}

// Fetch the OPERATORS LIST
function getOperators() {
    $('.operators_list').select2({
        'allowClear': true,
        'placeholder': 'Operators',
        ajax: {
            url: '/api/operators',
            data: function (params) {
                return {
                    search: params.term,
                    page: params.page || 1
                }
            },
            processResults: function (response) {
                return {
                    results: $.map(response.operators.data, function (item) {
                        return {
                            text: item.Operator_caption,
                            id: item.ID_OPERATOR
                        }
                    }),
                    pagination: {more: response?.operators?.data?.length > 0}
                }
            }
        },
    });
}
// Fetch the MSN LIST
function getMsn(operator_params) {
    $('.msn_list').select2({
        'allowClear': true,
        'placeholder': 'MSN',
        ajax: {
            url: '/api/msn',
            data: function (params) {
                return {
                    data: {operator_id: operator_params.id, operator_caption: operator_params.text},
                    search: params.term,
                    page: params.page || 1
                }
            },
            processResults: function (response) {
                return {
                    results: $.map(response.msn.data, function (item) {
                        return {
                            text: item.MSN_Description,
                            id: item.ID_MSN
                        }
                    })
                }
            }
        },
    });
}

function getUsers() {
    $('.users_list').each((i, item) => {

        $(item).select2({
            'allowClear': true,
            'placeholder': 'Select',
            ajax: {
                url: '/api/users',
                data: function (params) {
                    return {
                        search: params.term,
                        page: params.page || 1
                    }
                },
                processResults: function (response) {
                    return {
                        results: $.map(response.users.data, function (item) {
                            return {
                                text: item.USER_NAME,
                                id: item.ID_USER
                            }
                        }),
                        pagination: {more: response?.operators?.data?.length > 0}
                    }
                }
            },
        });
    });
}


function initPlugins() {
    One.helpersOnLoad('js-flatpickr');
}

function activateBootstrapBehavior() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    var alertList = document.querySelectorAll('.alert')
    alertList.forEach(function (alert) {
        new bootstrap.Alert(alert)
    })
}

function loadData() {
    let detailsRow = $('.details-row');
    let spinner = `<div class="spinner-container d-flex justify-content-center">
                        <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div></div>`;
    detailsRow.html(spinner);
    setTimeout(function(){
        let html = '';
        let columns_names = JSON.parse($('#columns_names').val());
        for (const property in columns_names) {
            html += `<div class="col-lg-4 col-md-6 col-12 mb-3">
                        <label for="${property}" 
                        class="property-label text-ellipsis mb-1"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" 
                        title="${columns_names[property]}"
                        >${columns_names[property]}</label>
                        <input type="text" name="${property}"
                        class="form-control" id="${property}"/>
                </div>`
        }
        detailsRow.empty();
        detailsRow.append(html);
        activateBootstrapBehavior()
    }, 500);
}

function displayAlert() {
    $('#alert-zone').html(`<div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <span id="alert-text">This functionality is not available in production yet !</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`);
}

export {initEventsList, getOperators, getUsers, initPlugins, loadData, displayAlert}