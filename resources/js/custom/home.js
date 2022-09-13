
$(() => {
    // Fetch the OPERATORS LIST
    getOperators();
    getUsers();
    initEventsList();
    initEventBtns();


    function initEventsList() {
        // Fetch the MSN LIST by OPERATOR
        $('.operators_list').on("change", function (e) {
            let operator_params = $(this).select2('data')[0];
            getMsn(operator_params);
        });

        // Fetch data by OPERATOR & MSN
        let detailsRow = $('.details-row');
        $('.msn_list').on('change', function (e){
            let params = $(this).select2('data')[0];
            let spinner = `<div class="spinner-container d-flex justify-content-center">
                    <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div></div>`;
            detailsRow.html(spinner);

            $.ajax({
                url: '/api/data',
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
                        if (true) {
                            html += `<div class="col-md-6 col-12 mb-2">
                                    <label for="${property}">${columns_names[property]}</label>
                                    <input type="text" name="${property}"
                                    class="form-control" id="${property}"
                                    value="${data[property] ?? ''}" />
                                </div>`
                        }
                    }
                    detailsRow.append(html);
                    $(".review-section").removeClass("disabled");
                }
            });
        });

        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
    }

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

    function initEventBtns() {
        $('.cancel').on('click', function (e) {
            $(".review-section").addClass("disabled");
        });
        $('#form').on('submit', function (e) {
            e.preventDefault()
            const formData = new FormData(this);
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
    }
    One.helpersOnLoad('js-flatpickr');
});
