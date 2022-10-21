import {loadData} from '../functions';

$(() => {

    let operator = JSON.parse(window.localStorage.getItem('operator'));
    let msn = JSON.parse(localStorage.getItem('msn'));



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
