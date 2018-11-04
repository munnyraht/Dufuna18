function formvalidation(){
    var firstname = document.Signup.firstname;
    if (firstname.value ==''){
        alert('Enter your Firstname');
        firstname.focus();
        return false;
    }
    var lastname = document.Signup.lastname;
    if (lastname.value==''){
        alert('Enter your lastname');
        lastname.focus();
        return false;
    }
    var gender = document.Signup.gender;
    if (gender.value==''){
        alert('Select your gender');
        return false;
    }
    var email = document.Signup.email;
    if (email.value==''){
        alert('Enter your email address');
        email.focus();
        return false;
    }
    var tel = document.Signup.phoneno;
    if ((tel.value=='') || (isNaN(tel.value))){
        alert('Phone no must be numeric');
        tel.focus();
        return false;
    }
    var dateofbirth = document.Signup.dob;
    if (dateofbirth.value==''){
        alert('Enter your Date of Birth');
        dateofbirth.focus();
        return false;
    }
    var country = document.Signup.country;
    if (country.value=='1'){
        alert('Select country');
        return false;
    }
    var lastname = document.Signup.lastname;
    if (lastname.value==''){
        alert('Enter your lastname');
        lastname.focus();
        return false;
    }
    var password = document.Signup.password;
    if (password.value==''){
        alert('Enter password');
        password.focus();
        return false;
    }
    var Repassword = document.Signup.rePassword;
    if (Repassword.value==''){
        alert('re-enter your password');
        lastname.focus();
        return false;
    }
    else if ( Repassword.value !== password.value){
        alert('password does not match');
        return false;
    }
    else{
        return true;
    }
    return true;
}