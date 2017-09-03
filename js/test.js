var Login = function () {

    var handleLogin = function () {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                login_post();
            }
        });

        $('.login-form input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    login_post();
                }
                return false;
            }
        });


        function login_post() {
            var data = {
                'username': $("#username").val(),
                'password': $("#password").val()

            };
            var el = $('.login-form').parents("html");
            $(".alert-danger").hide();
            startLoading(el);
            $.ajax({
                type: 'POST',
                url: "/login/login_post",
                data: data,
                success: function (response) {
                    stopLoading(el);
                    if (response.status !== "success") {
                        $("#alertDangerText").html(response.message);
                        $(".alert-danger").show();
                        $('body').animate({scrollTop: '100px'}, 300);
                        return;
                    }
                    window.location.href = "/home";
                },
                dataType: 'json'
            });
        }


    };
