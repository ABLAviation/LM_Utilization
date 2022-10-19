

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


export {initEventsList, getOperators, getUsers, initPlugins}