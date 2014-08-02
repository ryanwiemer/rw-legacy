// jQuery Validation Settings
jQuery(function() {
    jQuery('.form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
            },
            message: {
                required: true,

            },
        },
        errorPlacement: function () { },
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"../wp-content/themes/rw/mail.php",
                error: function() {
                        $('.form__error').fadeIn();
                },
                success: function() {
                        $('.form__success').fadeIn();
                }
            });
        }
    });
});
