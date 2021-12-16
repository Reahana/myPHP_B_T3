function checkFirstName(){
    var firstName = $('#firstName').val();
    var regex = /^[a-zA-Z- ]{2,15}$/;
    if(regex.test(firstName))
    {
        $('#firstNameError').text(' ');
        return true;
    }
    else
    {
        $('#firstNameError').text('First Name must be in 2-15 character');
        return false;
    }
}
function checkLastName(){
    var lastName = $('#lastName').val();
    var regex = /^[a-zA-Z- ]{2,15}$/;
    if(regex.test(lastName))
        {
            $('#lastNameError').text(' ');
            return true;
        }
        else
        {
            $('#lastNameError').text('Last Name must be in 2-15 character');
            return false;
        }
}
function checkEmail(){
    var email = $('#email').val();
    var regex =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if(regex.test(email))
        {
            $('#emailError').text(' ');
            return true;
        }
        else
        {
            $('#emailError').text('Email is not valid');
            return false;
        }
}
function checkPassword(){
    var password = $('#password').val();
    var regex =/^(?=.*[0-9])(?=.*[!@#$%^&*.])[a-zA-Z0-9!@#$%^&*.]{6,16}$/
    if(regex.test(password))
        {
            $('#passwordError').text(' ');
            return true;
        }
        else
        {
            $('#passwordError').text('Password is Incorrect');
            return false;
        }
}
function checkConfirmPassword(){
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
    if(password == confirmPassword )
    {
        $('#confirmPasswordError').text(' ');
        return true;
    }
    else
    {
        $('#confirmPasswordError').text('Password and Confirm password are not same');
        return false;
    }
}
function checkPhoneNumber()
{
    var phoneNumber = $('#phoneNumber').val();
    var regex = /^\+?(88)?0?1[3456789][0-9]{8}\b/g;
    if(regex.test(phoneNumber))
    {
        $('#phoneNumberError').text(' ');
        return true;
    }
    else
    {
        $('#phoneNumberError').text('Phone number format invalid');
        return false;
    }
}

function checkDistrict(){
    var districtName = $('#districtName').val();
    if(districtName == null)
    {
        $('#districtNameError').text('Select correct district name');
        return false;
    }
    else{
        $('#districtNameError').text(' ');
        return true;
    }
}
function checkGender(){
    var gender = $ ('input[name="gender"]:checked').val();
    // if(gender.lenght>0)
    if(gender != null)
    {
        $('#genderError').text(' ');
        return true;
    }
    else{
        $('#genderError').text('Please select your gender ');
        return false;
    }
}

$('#firstName').keyup(function(){
    checkFirstName();
});
$('#lastName').keyup(function(){
    checkLastName();
});
$('#email').keyup(function(){
    checkEmail();
});
$('#password').keyup(function(){
    checkPassword();
});
$('#showHide').click(function(){
    var typeValue= $('#password').attr('type');
    if(typeValue=='password')
    {
      $('#password').attr('type','text');
    }
    else{
      $('#password').attr('type','password');
    }
  });
$('#confirmPassword').keyup(function(){
    checkConfirmPassword();
});
$('#phoneNumber').keyup(function(){
    checkPhoneNumber();
});
$('#districtName').click(function(){
    checkDistrict();
});


$('#registrationForm').submit(function(){
    if (checkFirstName() && checkLastName() &&  checkEmail() &&  checkPassword() &&  checkConfirmPassword() && checkPhoneNumber() &&  checkDistrict() && checkGender())
    {
        return true;
    }
    else
    {
        return false;
    }
});