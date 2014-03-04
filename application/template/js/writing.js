$(document).ready(function(){
  $(document.body).on("click", "#btnshow", function(event)
  {
    $(".w_key").css("display","block");
  });
  $(document.body).on("click", "#btnagain", function(event)
  {
    $(".w_key").css("display","none");
  });

});
function eraseText() {
    document.getElementById("output").value = "";
}