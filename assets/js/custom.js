//  Validate Email
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}


//  Validate Contact Form
function validateContactForm() {

  var email = $('#mail').val();
  var first_name = $('#first_name').val();
  var last_name = $('#last_name').val();
  var message = $('#message').val();
  var phone = $('#phone').val();

  if(!email || !first_name || !last_name || !message) {
    alert('Please insert your first and last name, email and message. Thank you.');
    return false;
  }
  else {
    if(!validateEmail(email)) {
      alert('The email address seems to be invalid');
      return false;
    }
    else {                              
      $('#contactForm').submit();
    }
  }
}