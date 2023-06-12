function validateForm() {
  var name = document.forms["contactForm"]["name"].value;
  var email = document.forms["contactForm"]["email"].value;
  var message = document.forms["contactForm"]["message"].value;

  if (name == "" || email == "" || message == "") {
    alert("Si prega di compilare tutti i campi");
    return false;
  }
}
