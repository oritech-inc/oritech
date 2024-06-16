$(function(){
    $(document).delegate('#auth-form','submit',function (e) {
        e.preventDefault();
        alert()
    });
    $('#bt-auth').click(function (e) {
        e.preventDefault();
        const data = validateData();
        const type = $(this).attr('data-type');
                                     alert()
        if (data === false) {
            $('#msg-feed').html('Invalid user details');
            $('#tx-user').removeClass('is-valid').addClass('is-invalid');
            $('#tx-password').removeClass('is-valid').addClass('is-invalid');
        } else {
            $('#tx-user').removeClass('is-invalid').addClass('is-valid');
            $('#tx-password').removeClass('is-invalid').addClass('is-valid');
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '/script/auth.php',
                data: {
                    authUser: 1,
                    user: data.user,
                    pass: data.pass,
                    remm: data.remm,
                },
                success: function (output) {
                    if (output.results === "success") {
                        window.location.href = '/';
                    } else {
                        $('#msg-feed').html('User data not found');
                    }
                }
            });
        }
    });

    function validateData() {
        const user = $('#tx-user').val();
        const pass = $('#tx-password').val();
        const type = $('#bt-auth').attr('data-type')

        if (user === '') {
            $('#tx-user').focus().addClass('is-invalid').removeClass('is-valid');
            $('#msg-feed').html('Username or Email is required');
            return false;
        } else if (pass === '' || pass.length < 6) {
            $('#tx-password').focus().removeClass('is-valid').addClass('is-invalid');
            $('#msg-feed').html('Invalid user password');
            return false;
        } else {

            if(type === "register"){
                const mail = $('#tx-email').val();
                const repass = $('#tx-repassword').val();
                if (mail === '') {
                    $('#tx-mail').focus().addClass('is-invalid').removeClass('is-valid');
                    $('#msg-feed').html('Email is required');
                    return false;
                } else if (pass !== repass) {
                    $('#tx-password').focus().removeClass('is-valid').addClass('is-invalid');
                    $('#tx-repassword').focus().removeClass('is-valid').addClass('is-invalid');
                    $('#msg-feed').html('Passwords don\'t match');
                    return false;
                } else {
                   $('#msg-feed').html('...');
                    return {
                        'user': user,
                        'pass': pass,
                        'mail': mail,
                        'repass': repass,
                    }
                }

            }
            else{
                $('#tx-user').removeClass('is-invalid').addClass('is-valid');
                $('#tx-password').removeClass('is-invalid').addClass('is-valid');
                $('#msg-feed').html('...');
                return {
                    'user': user,
                    'pass': pass,
                    'mail': "",
                    'repass': "",
                }
            }

        }
    }

    $('.auth-link').click(function (e) {
        e.preventDefault();
        const link = $(this).attr('data-link');
        if(link === "register"){
            $('.title').html('Register new user');
            $('#lb-user').html('Username *');
            $('#lb-auth').html('Already registered?');
            $(this).attr('data-link', 'login').html('Sign in');
            $('#bt-auth').attr('data-type', 'register');
            $('#grp-email').removeAttr('hidden');
            $('#grp-pass').removeAttr('hidden');
            $('#auth-form').css('max-width','600px');
        }
        else{
            $('.title').html('Welcome back!');
            $('#lb-user').html('Username or Email *');
            $('#lb-auth').html('Not registered yet?');
            $(this).attr('data-link', 'register').html('Register now');
            $('#bt-auth').attr('data-type', 'login');
            $('#grp-email').attr('hidden', 'hidden');
            $('#grp-pass').attr('hidden', 'hidden');
            $('#auth-form').css('max-width','400px');
        }
    });

    $('.bt-link').click(function (e) {
        const link = $(this).attr('data-link');
        if(link === 'auth'){
            $('.auth-form').removeAttr('hidden');
            $('#welcome-content').attr('hidden', 'hidden');
        }else{
            $('#welcome-content').removeAttr('hidden');
            $('.auth-form').attr('hidden', 'hidden');
        }
    });

    $('.btn-show-pass').click(function (e) {
        e.preventDefault();
        const state = $(this).attr('data-state');
        if (state === 'hidden') {
            $('.password').attr('type', 'text');
            $(".btn-show-pass").attr('data-state', 'shown').html('<i class="bi bi-eye-slash-fill fa-1x"></i>');
        } else {
            $('.password').attr('type', 'password');
            $(".btn-show-pass").attr('data-state', 'hidden').html('<i class="bi bi-eye-fill fa-1x"></i>');
        }
    });

    $('.bt-link').click(function (e) {
        e.preventDefault();
        const link = $(this).attr('data-link');
        if (link === 'logout') {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '/script/auth.php',
                data: { logoutUser: 1 },
                success: function (output) {
                    if (output.results === "done") {
                        window.location.href = '/';
                    } else {
                        console.log(output);
                    }
                }
            });
        }
    });
    

});