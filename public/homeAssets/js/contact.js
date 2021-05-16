// Working Contact Form
// $('#contact-form').submit(function() {
//     var action = $(this).attr('action');

//     $("#message").slideUp(750, function() {
//         $('#message').hide();

//         $('#submit')
//             .before('')
//             .attr('disabled', 'disabled');

//         $.post(action, {
//                 name: $('#name').val(),
//                 email: $('#email').val(),
//                 comments: $('#comments').val(),
//             },
//             function(data) {
//                 document.getElementById('message').innerHTML = data;
//                 $('#message').slideDown('slow');
//                 $('#cform img.contact-loader').fadeOut('slow', function() {
//                     $(this).remove()
//                 });
//                 $('#submit').removeAttr('disabled');
//                 if (data.match('success') != null) $('#cform').slideUp('slow');
//             }
//         );

//     });

//     return false;

// });

// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
// 'use strict'

// window.addEventListener('load', function () {
//   // Fetch all the forms we want to apply custom Bootstrap validation styles to
//   var forms = document.getElementsByClassName('needs-validation')

//   // Loop over them and prevent submission
//   Array.prototype.filter.call(forms, function (form) {
//     form.addEventListener('submit', function (event) {
//       if (form.checkValidity() === false) {
//         event.preventDefault()
//         event.stopPropagation()
//       }
//       form.classList.add('was-validated')
//     }, false)
//   })
// }, false)
// }())









// Contact Form
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var subject = document.forms["myForm"]["subject"].value;
  var comments = document.forms["myForm"]["comments"].value;
  document.getElementById("error-msg").style.opacity = 0;
  document.getElementById('error-msg').innerHTML = "";
  if (name == "" || name == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Name*</div>";
    fadeIn();
    return false;
  }
  if (email == "" || email == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Email*</div>";
    fadeIn();
    return false;
  }
  if (subject == "" || subject == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Subject*</div>";
    fadeIn();
    return false;
  }
  if (comments == "" || comments == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Comments*</div>";
    fadeIn();
    return false;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("simple-msg").innerHTML = this.responseText;
      document.forms["myForm"]["name"].value = "";
      document.forms["myForm"]["email"].value = "";
      document.forms["myForm"]["subject"].value = "";
      document.forms["myForm"]["comments"].value = "";
    }
  };
  xhttp.open("POST.html", "php/contact.html", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("name=" + name + "&email=" + email + "&subject=" + subject + "&comments=" + comments);
  return false;
}
function fadeIn() {
  var fade = document.getElementById("error-msg");
  var opacity = 0;
  var intervalID = setInterval(function () {
    if (opacity < 1) {
      opacity = opacity + 0.5
      fade.style.opacity = opacity;
    } else {
      clearInterval(intervalID);
    }
  }, 200);
}