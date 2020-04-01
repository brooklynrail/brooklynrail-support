console.log('Validate!');
var checks = {
  'email': false,
  'first_name': false,
  'last_name': false,
  'captcha': false
}
// is full form valid
function isValid(){
  for(var i in checks){
    if(!checks[i]){
      $('#submit-button').prop('disabled', true);
      return false;
    }
  }
  $('#submit-button').removeAttr('disabled');
  return true;
}
// Validate Email
function validatemail(mail) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (mail.match(mailformat)) {
    $('email').addClass('is-valid').focus();
    checks['email'] = true;
    isValid();
    return true;
  } else {
    checks['email'] = false;
    $('email').addClass('is-invalid').focus();
    $('#submit-button').prop('disabled', true);
    return false;
  }
}
function validatename(name, class_name) {
  if (name.length !== 0) {
    $(class_name).addClass('is-valid').focus();
    checks[class_name] = true;
    isValid();
    return true;
  } else {
    checks[class_name] = false;
    $(class_name).addClass('is-invalid').focus();
    $('#submit-button').prop('disabled', true);
    return false;
  }
}


function recaptchaCallback(data) {
  $captcha_url = "https://donate.brooklynrail.org/captcha.php";

  var success = function(response){
    if (response['success'] == true){
      console.log('success');
      checks['captcha'] = true;
      isValid();
      return true;
    }
  };

  $.ajax({
    type: "POST",
    url: "/captcha.php?callback=response",
    data: {
      captcha: grecaptcha.getResponse()
    },
    dataType: "jsonp",
    success: success,
    error: function(){
      console.log('captcha not veri');
    }
  });
};

window.recaptchaCallback = recaptchaCallback;
