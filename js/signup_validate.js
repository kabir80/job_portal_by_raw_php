$(document).ready(function () {
    // Signup Form Validate
    var email_error = true;
    var pass_error = true;

    $('#email').focusout(function () {
        check_email();
    })

    $('#pass, #pass1').focusout(function () {
        check_password();
    })

    function check_email() {
        var email = $('#email').val();
        if (email == "" || email == " " || email == null) {
            $('#emailHelp').text('error');
        } else {
            email_error = false;
           $('#emailHelp').hide();

        }
    }

    function check_password() {
        var pass = $('#pass').val();
        if ($('#pass').val() != $('#pass1').val() || $('#pass').val() == '') {
            $('#passHelp').text('incorrect');
        }else if(pass.length < 5){
            $('#passHelp').text('minimum 6 character');
        } else {
            $('#passHelp').hide()
        }

    }


    // Validate Email
    $('#signup').click(function () {
        if (email_error == false) {
            console.log('working');
        } else {
            console.log('field input missing');
            return false;
        }
    })
    //  Sign Up form validation End
})

