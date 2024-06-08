$(function(){
    $('#login').click(function (e) {
        e.preventDefault();
        const data = validateData();

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
        const remm = ($('#ch-remember').is(":checked")) ? 'Yes' : 'No';

        if (user === '') {
            $('#tx-user').focus().addClass('is-invalid').removeClass('is-valid');
            $('#msg-feed').html('Username or Email is required');
            return false;
        } else if (pass === '' || pass.length < 6) {
            $('#tx-password').focus().removeClass('is-valid').addClass('is-invalid');
            $('#msg-feed').html('Invalid user password');
            return false;
        } else {
            $('#tx-user').removeClass('is-invalid').addClass('is-valid');
            $('#tx-password').removeClass('is-invalid').addClass('is-valid');
            $('#msg-feed').html('...');
            return {
                'user': user,
                'pass': pass,
                'remm': remm
            }
        }
    }

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