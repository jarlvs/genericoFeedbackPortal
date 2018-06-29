  $(function() {
  
    
  
    $(".button").click(function() {
     
            function getParameterByName(name, url) {
               if (!url) url = window.location.href;
               name = name.replace(/[\[\]]/g, "\\$&");
               var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
               results = regex.exec(url);
               if (!results) return null;
               if (!results[2]) return '';
               return decodeURIComponent(results[2].replace(/\+/g, " "));
      }
      
      var rating = $("input[name='options']:checked").val();
      var name = getParameterByName('name');
      var mobile = getParameterByName('mobile');
    
      
      
      
      
     alert(rating);
     $.ajax({
       type: "POST",
       url: "app/php/database/Process.php",
       data: {rating : rating, name : name , mobile: mobile },
       success: function() {
        $('#contact_form').html("<div id='message' style='text-align:center'></div>");
        
        $('#message').html("<img style='width:15%' id='checkmark' src='img/check.png' />")
     
        .append("<h2 style='font-size:50px;'>Thank you for your feedback</h2>")
        .append("<p style='font-size:40px;'>It means a lot to us</p>")
     
      
      }
    });
   
   return false;
   });

 });