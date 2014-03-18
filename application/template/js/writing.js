$(document).ready(function(){
  $(document.body).on("click", "#btnshow", function(event)
  {
    $(".w_key").css("display","block");
  });
  $(document.body).on("click", "#btnagain", function(event)
  {
    $(".w_key").css("display","none");
       });
  $(document.body).on("click", "#btnshow_es", function(event)
  {
    $(".hidden_key").css("display","block");
  });
  $(document.body).on("click", "#btnagain_es", function(event)
  {
    $(".hidden_key").css("display","none");
    time=1201;
  });
  $(document.body).on("keydown", "textarea", function(event)
  {
    var content=$(this).val();
    
    var count=content.split(/ /g).length;
    count=300-count;
    if(count>1)
    {
      $(".wordcount").html(count+" words left");
    }
    else if(count==1)
    {
      $(".wordcount").html(count+" word left");
    }
    else
    {
      $('textarea').attr("disabled","disabled"); 
      $(".wordcount").html("0 word left");
    }
  });
  var time=1200;
   var refreshId = setInterval(function()
    {
      time = time - 1;
      var min = Math.floor(time/60);
      var sec = time - min*60;
      $("#mm").html(min);
      $("#ss").html(sec);
      if(time==0)
      {
        alert("Het gio lam bai");
      }
    }, 1000);

});
function eraseText() {
    document.getElementById("output").value = "";
}