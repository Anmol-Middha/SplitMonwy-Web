
// function validate(){
//      $('#sbmt').on('click', function (e) {

//         e.preventDefault();
//      $.ajax({
//           type: 'post',
//           url: 'splitmoney.php',
//           data: $('form').serialize(),
//           success: function () {
//                 var x = document.getElementById("snackbar");

//                 // Add the "show" class to DIV
//                 x.className = "show"

//                 // After 3 seconds, remove the show class from DIV
//                 setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);  
//           }
//         });
// });
// }
$(function () {
       
      $('#add').on('click', function (e) {

        e.preventDefault();

        $.ajax({
          type: 'post',
          url: 'process_personal.php',
          data: $('form').serialize(),
          success: function () {
                var x = document.getElementById("snackbar")

                // Add the "show" class to DIV
                x.className = "show";

                // After 3 seconds, remove the show class from DIV
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);  
          }
        });
      });
    });
