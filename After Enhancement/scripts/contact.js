function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["mail"].value;
  if (x == "" || x == null || y == "" || y == null) {
    alert("Name and Email must be filled out");
    return false;
    }
    else{
    alert ("Thank you for subscribing");
  }
}