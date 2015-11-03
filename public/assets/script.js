$(function(){
  $("#validate-submit").click(function(){
    history.pushState({}, '', '/?url='+encodeURIComponent($("#validate-url").val()));
    $.post('/validate', {
      url: $("#validate-url").val(),
      json: $("#validate-json").val()
    }, function(response){
      console.log(response);

      $("#validate-results").html(response.html);
      $("#validate-json").val(response.json);
    });
    return false;
  });

  if($("#validate-url").val() != '') {
    $("#validate-submit").click();
  }
});
