$(document).ready(function(e){
    $('#register-toggle').click(function(){
        $('#login-div').toggle();
        $('#register-div').toggle();
        $('#bck-to-login').fadeIn(100);
    });

    $('#bck-to-login').click(function(){
        $('#login-div').toggle();
        $('#register-div').toggle();
        $('#bck-to-login').fadeIn(100);
    });

    $('#login').submit(function(e){
        e.preventDefault();
        console.log($(this).serialize());
        $.ajax({
            url: 'login',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'text',
            success:function(msg){
                $('#session_anon').fadeOut(100);
                $('#session_tab').fadeIn(100);
                document.getElementById('session_tab_text').innerHTML = msg;
            }
        });
    })

    $('#register').submit(function(e){
        e.preventDefault();
        if ($('#reg_password').val() != $('#confpassword').val()) {
            console.log('asds');
            $('#register-div-error').fadeIn(100);
        }
        else {
            $('#register-div-error').fadeOut(100);
            $.ajax({
                url: 'register',
                type: 'POST',
                data: $(this).serialize(),
                success:function(msg){
                    $('#session_anon').fadeOut(100);
                    $('#session_tab').fadeIn(100);
                }
            });
        }
    })

    $('#confpassword').keyup(function(e){
        var pass = $('#reg_password').val();
        console.log(pass +" -- "+ $(this).val());
        if (pass != $(this).val()) {
            $('#pass-div').addClass('has-error');
        }
        else {
            $('#pass-div').removeClass('has-error');
        }
    })
});