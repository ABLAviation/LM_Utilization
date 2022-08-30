
$(() => {
    $('.operators_list').select2({
        'placeholder': 'Operators',
        ajax: {
            url: '/api/operators',
            processResults: function (data) {
                return {
                    results: $.map(data.operators, function (item) {
                        return {
                            text: item.Operator_caption,
                            id: item.ID_OPERATOR
                        }
                    })
                }
            }
        },
    });

    $('.operators_list').on("change", function (e) {
        let params = $(this).select2('data')[0];
        $('.msn_list').select2({
            'placeholder': 'MSN',
            ajax: {
                url: '/api/msn',
                data: {operator_id: params.id, operator_caption: params.text},
                processResults: function (data) {
                    return {
                        results: $.map(data.msn, function (item) {
                            return {
                                text: item.MSN_Description,
                                id: item.ID_MSN
                            }
                        })
                    }
                }
            },
        });
    });

    $('.msn_list').on('change', function (e){
        let params = $(this).select2('data')[0];
        $.ajax({
            url: '/api/data',
            data: {msn_id: params.id},
            success: function (data) {
                debugger
            }
        });
    });

});
