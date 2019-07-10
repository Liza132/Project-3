$(document).ready(function () {
    $(".coment-bottom").click(
        function () {
            sendAjaxForm('rezult-form', 'comment-form', 'reg.php');
            return false;
        }
    );

    $(".chek-bott").click(
        function () {
            sendAjaxForm('register-rezult-form', 'register-form', 'register.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: $("#" + ajax_form).serialize(),
        success: function (response) {
            data = $.parseJSON(response);
            resultForm = $('#' + result_form)[0];
            resultForm.style = data.result === true ? 'color: green' : 'color: red';
            resultForm.innerText = data.message;
        },
        error: function (response) {
            resultForm = $('#' + result_form)[0];
            resultForm.style = 'color: red';
            resultForm.innerText = 'Щось пішло не так';
        }
    });
}