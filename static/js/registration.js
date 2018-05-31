$(document).ready(function () {
    //$("#register-button").click(function(){
    /*$("#registration-form").submit(function () {
        var data = $('#registration-form').serialize();
        //var url = "<?php echo base_url()?>/index.php/registration/submit";
        $.ajax(registration_submit_url, {
            data: data,
            success: registration_success,
            error: onError,
            type: "POST"
        });
        return false;
    });*/

    $('#registration-form').validate({
        onfocusout: function (element) {
            this.element(element);
        },
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            confirm_password: {
                required: true
            }
        },
        submitHandler: function () {
            var data = $('#registration-form').serialize();
            //var url = "<?php echo base_url()?>/index.php/registration/submit";
            $.ajax(registration_submit_url, {
                data: data,
                success: registration_success,
                error: onError,
                type: "POST"
            });
            return false;
        }
    });
});

var registration_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.success_message);
    } else {
        alert(response.error_message);
    }
}
var onError = function () {
    alert("Error");
};
