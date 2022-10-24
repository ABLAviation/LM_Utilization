import {loadData, displayAlert} from '../functions';

$(() => {

    let operator = JSON.parse(window.localStorage.getItem('operator'));
    let msn = JSON.parse(localStorage.getItem('msn'));



    loadData()

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
