$(document).ready(function() {

    $("#signup").click(function(){
      var email = $("#email").val();
      var pass = $("#pass").val();
      var pass1 = $("#pass1").val();
    
      $("#email").focusout(function(){check_email();});
      function check_email(){
          if(email == ""){
              alert("input email");
          }
      }
    
       
    })

 })