$(document).ready(function () {
        $(".button-collapse").sideNav();
      });


      $(document).ready(function(){
    $('.modal').modal();

  });

  document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'up',
    hoverEnabled: false
  });
});

//Validates that the user did not leave any input blank
function validateForm() {

  var firstname = document.forms["contact_form"]["first_name"].value;
  var lastname = document.forms["contact_form"]["last_name"].value;
  var idNumber = document.forms["contact_form"]["id_number"].value;
  var email = document.forms["contact_form"]["email"].value;
  var campusClassification = document.forms["contact_form"]["group1"].value;
  console.log(idNumber);
  if (firstname == "") {
     alert("Name cannot be empty.");
     return false;
  }
  
  if (lastname == "") {
    alert("Last name cannot be empty.");
    return false;
  }
  if (idNumber.length != 9) {
    alert("ID number must be 9 numbers.");
    return false;
  }

  if (email == "") {
    alert("Email cannot be empty.");
    return false;
  }

  if (campusClassification == "") {
    alert("Please select a Campus Classification");
    return false;
  }
  if (firstname != "") {
    alert("Welcome to the Club!");
  }
  
}



//Adds smooth scrolling to Navbar links
$(document).ready(function(){
// Add smooth scrolling to all links
$("a").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  } // End if
});
});

$("#myform").bind('ajax:complete', function() {

         // tasks to do


   });
