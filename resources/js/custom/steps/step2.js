import _ from 'lodash';

$(() => {

    let operator = JSON.parse(window.localStorage.getItem('operator'));
    let msn = JSON.parse(localStorage.getItem('msn'));


    function loadData() {
        let detailsRow = $('.details-row');
        let spinner = `<div class="spinner-container d-flex justify-content-center">
                        <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div></div>`;
        detailsRow.html(spinner);
        let html = '';
        let columns_names = JSON.parse($('#columns_names').val());
        for (const property in columns_names) {
            html += `<div class="col-lg-4 col-md-6 col-12 mb-3">
                    <label for="${property}" class="mb-1">${columns_names[property]}</label>
                    <input type="text" name="${property}" placeholder="${columns_names[property]}"
                    class="form-control" id="${property}"/>
                </div>`
        }
        detailsRow.empty();
        detailsRow.append(html);
    }

    loadData()

    $('#form').on('submit', function (e) {
        e.preventDefault()
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
