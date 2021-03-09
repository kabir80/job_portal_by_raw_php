$(document).ready(function() {

    $("#signup").click(function(){
      var email = $("#email").val();
      if(email == " "){
          alert('input email');
          return false;
      }
       
    })

 })