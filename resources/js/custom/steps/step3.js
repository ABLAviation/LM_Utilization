import {displayAlert, loadData} from "../functions";

$(() => {
    loadData();

    $('.update').on('click', function (e) {
        e.preventDefault()
        return displayAlert();
    });
})