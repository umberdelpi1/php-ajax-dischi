$(document).ready(function(){

  $.ajax({
    url: 'api.php',
    method: 'GET',
    success: function(data){
        console.log(data);
        for (var i = 0; i < data.length; i++) {
          var result = data[i];
          console.log(result);
        }
      },
    error: function(data) {

    }

  });









});
