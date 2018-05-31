$(document).ready(function () {
   /* $("#login-form").submit(function () {
        var data = $('#login-form').serialize();

        $.ajax(login_submit_url, {
            data: data,
            success: login_success,
            error: onError,
            type: "POST"
        });
        return false;
    });*/

    $('#login-form').validate({
        onfocusout: function (element) {
            this.element(element);
        },
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        submitHandler: function () {
            var data = $('#login-form').serialize();

            $.ajax(login_submit_url, {
                data: data,
                success: login_success,
                error: onError,
                type: "POST"
            });
            return false;
        }
    });

});

var login_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.success_message);
        alert(response.row.name);
    } else {
        alert(response.error_message);
    }

}
var onError = function () {
    alert("Error");
}

    