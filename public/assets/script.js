$(function(){
  $("#validate-submit").click(function(){
    $.post('/validate', {
      url: $("#validate-url").val(),
      json: $("#validate-json").val()
    }, function(response){
      console.log(response);

      $("#validate-results").html(response.html);
    });
    return false;
  });
});
