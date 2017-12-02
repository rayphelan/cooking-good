//  Validate Email
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}


//  Validate Contact Form
function validateContactForm() {

  $('.loading-spinner, .submit-button').toggle();

  var email = $('#mail').val();
  var first_name = $('#first_name').val();
  var last_name = $('#last_name').val();
  var message = $('#message').val();
  var phone = $('#phone').val();

  if(!email || !first_name || !last_name || !message) {
    displayErrorMessage('Before we continue...','Please insert your first and last name, email and message. Thank you.');
    return false;
  }
  else {
    if(!validateEmail(email)) {
      displayErrorMessage('Please check','The email address seems to be invalid');
      return false;
    }
    else {         
      //  Successful Validation, Submit Form                     
      ajaxContact();
    }
  }
}


//  Send Ajax Post Request with Contact details
function ajaxContact() {  
  
  var url = $('#contactForm').attr('action');
  var data = $('#contactForm').serialize();
  var callback = function(data, status) {
    if(status != 'success') {
      ajaxError();
      return false;
    }
    //  Check server response
    switch(data) {

      //  Successfull Contact 
      case 'success':
        showThankyou();
        return true;
      break;

      //  User may be Robot
      case 'recaptcha_error':
        recaptchaError();
        return false;
      break;
      
      //  Server error
      case 'error':
        serverRespondedWithError();
        return false;
      break;

      default: 
        serverRespondedWithError();
      break;

    }
    return false;
  }

  $.post(url,data,callback);

}



//  -----------------------------------------------------------------------------------------
//  REGISTRATION

//  Validate Registration Form
function validateRegisterForm() {

  $('.loading-spinner, .submit-button').toggle();

  var email = $('#mail').val();
  var first_name = $('#first_name').val();
  var last_name = $('#last_name').val();
  var password = $('#password').val();
  var confirm_password = $('#confirm_password').val();
  
  if(!$('#tcs').is(':checked')) {
    displayErrorMessage('Before we continue...','Please agree to Terms & Conditions');
    return false;
  }

  if(!email || !first_name || !last_name || !password || !confirm_password) {
    displayErrorMessage('Before we continue...','Please insert your first name, last name, email, password and password confirmation. Thank you.');
    return false;
  }
  else {
    if(password != confirm_password) {
      displayErrorMessage('Please check','Your passwords do not match');
      return false;
    }
    if(!validateEmail(email)) {
      displayErrorMessage('Please check','The email address seems to be invalid');
      return false;
    }
    else {               
      //  Successful validation, Submit for via Ajax               
      ajaxRegistration();
    }
  }

}


//  Send Ajax Post Request with Registration details
function ajaxRegistration() {  
  
  var url = $('#registerForm').attr('action');
  var data = $('#registerForm').serialize();
  var callback = function(data, status) {

    if(status != 'success') {
      ajaxError();
      return false;
    }
    //  Check server response
    switch(data) {

      //  Successfull Registration
      case 'success':
        showThankyou();
        return true;
      break;
      
      //  User may be Robot
      case 'recaptcha_error':
        recaptchaError();
        return false;
      break;

      //  User email already registered
      case 'duplicate_email':
        displayErrorMessage('We are sorry','The email address you provided seems to already be registered. Please use the Log In page instead.');
        return false;
      break;

      //  Server error
      default: 
        serverRespondedWithError();
      break;
    }
    return false;
  }

  $.post(url,data,callback);


}


//  -----------------------------------------------------------------------------------------
//  LOGIN
//  Validate Contact Form
function validateLoginForm() {

  $('.loading-spinner, .submit-button').toggle();

  var email = $('#mail').val();
  var password = $('#password').val();

  if(!email || !password) {
    displayErrorMessage('Please check','Please insert your email and password.');
    return false;
  }
  else {
    if(!validateEmail(email)) {
      displayErrorMessage('Please check','The email address seems to be invalid');
      return false;
    }
    else {         
      //  Successful Validation, Submit Form                     
      ajaxLogin();
    }
  }
}

//  Login Ajax
function ajaxLogin() {  
  
  var url = $('#loginForm').attr('action');
  var data = $('#loginForm').serialize();
  var callback = function(data, status) {

    //$('#testdiv').html(data);

    if(status != 'success') {
      ajaxError();
      return false;
    }
    //  Check server response
    switch(data) {

      //  Successfull Registration
      case 'success':
        window.location.reload(true);
        return true;
      break;
      
      //  Invalid 
      case 'invalid':
        displayErrorMessage('We are sorry','The email and password you entered do not match up with our records. <br>Please try again.');
        return false;
      break;

      //  Email not verified
      case 'email_not_verified':
        displayErrorMessage('We are sorry','The email address you provided has not been verified. <br>Please check your emails for the Verification Email, possibily even in the spam folder.');
        return false;
      break;
      
      //  User not allowed
      case 'not_allowed':
        displayErrorMessage('We are sorry','You are not permitted to login to this account.');
        return false;
      break;

      //  Server error
      default: 
        serverRespondedWithError();
      break;

    }
    return false;
  }

  $.post(url,data,callback);


}


//  -----------------------------------------------------------------------------------------
//  RESET PASSWORD
//  Validate Reset Password Form
function validateResetPWForm() {

  $('.loading-spinner, .submit-button').toggle();

  var email = $('#mail').val();

  if(!email) {
    displayErrorMessage('Please check','Please fill in your email address.');
    return false;
  }
  else {
    if(!validateEmail(email)) {
      displayErrorMessage('Please check','The email address seems to be invalid');
      return false;
    }
    else {         
      //  Successful Validation, Submit Form                     
      ajaxResetPW();
    }
  }
}
//  Reset Password Ajax
function ajaxResetPW() {  
  
  var url = $('#resetPWForm').attr('action');
  var data = $('#resetPWForm').serialize();
  var callback = function(data, status) {

    //$('#testdiv').html(data);

    if(status != 'success') {
      ajaxError();
      return false;
    }
    //  Check server response
    switch(data) {

      //  Successfull Registration
      case 'success':
        showThankyou();
        return true;
      break;
      
      //  Invalid 
      case 'invalid':
        displayErrorMessage('We are sorry','The email address you provided does not match our records. <br>Please try again.');
        return false;
      break;


      //  Server error
      default: 
        serverRespondedWithError();
      break;

    }
    return false;
  }

  $.post(url,data,callback);


}



//  -----------------------------------------------------------------------------------------
//  NEW PASSWORD
//  Validate New Password Form
function validateNewPWForm() {

  $('.loading-spinner, .submit-button').toggle();

  var password = $('#password').val();
  var confirm_password = $('#confirm_password').val();

  if(!password || !confirm_password) {
    displayErrorMessage('Please check','Please fill in your password and password confirmation.');
    return false;
  }
  else {
    if(password != confirm_password) {
      displayErrorMessage('Please check','Your password and password confirmation do not match.');
      return false;   
    }
    //  Successful Validation, Submit Form                     
      ajaxNewPW();
  }
}
//  New Password Ajax
function ajaxNewPW() {  
  
  var url = $('#newPWForm').attr('action');
  var data = $('#newPWForm').serialize();
  var callback = function(data, status) {

    //$('#testdiv').html(data);

    if(status != 'success') {
      ajaxError();
      return false;
    }
    //  Check server response
    switch(data) {

      //  Successfull Registration
      case 'success':
        showThankyou();
        return true;
      break;

      //  Server error
      default: 
        serverRespondedWithError();
      break;

    }
    return false;
  }

  $.post(url,data,callback);


}




//  -----------------------------------------------------------------------------------------
//  DISPLAY MESSAGES

//  Display Error Messages
function displayErrorMessage(title, message) {
  $('#error-section, #form-section').toggle();
  $('#error-title').html(title);
  $('#error-message').html(message);  
}

//  Click OK on error message
function errorMessageOK() {
  $('#error-section, .loading-spinner').hide();
  $('#form-section, .submit-button').show();
}

//  Say Thank you
function showThankyou() {
  $('#thank-you-section').show()
  $('#form-section').hide();
}

//  Server responded with error
function serverRespondedWithError() {
  displayErrorMessage('We are sorry','The server responded with an error');
  return false;
}


//  Recaptcha Error
function recaptchaError() {
  displayErrorMessage('We are sorry','Recaptcha did not authorize this message');
  return false;
}

//  Ajax error
function ajaxError() {
  displayErrorMessage('We are sorry','An unknown error occured');
  return false;
}