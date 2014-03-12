$(document).ready(function(){
  $('.aaa').hide();
  $('.aaa.1').show();
  $('#btnback').hide();
  var a=1;
  $('#'+a).addClass("show");
  var num= $('.aaa').length;


  $(document.body).on("click", "#btnnext", function(event)
  {
    $('.option_ans').removeClass("show");
    a=a+1;
    if(a==num)
    {
      $('#btnnext').hide();
    }
    else
      $('#btnnext').show();
    $('.aaa').hide();
    $('.aaa.'+a).show();
    if(a==1)
    {
      $('#btnback').hide();
    }
    else
      $('#btnback').show();
    $("#show"+a).find(".option_ans").addClass("show");
    var t = $(".show").position().top - $("#show1").position().top;
    $(".test_answer").animate({ scrollTop: t}, 400);
  });
  
  $(document.body).on("click", "#btnback", function(event)
  {
    $('.option_ans').removeClass("show");
    a=a-1;
    if(a==num){
      $('#btnnext').hide();
    }
    else
      $('#btnnext').show();
    $('.aaa').hide();
    $('.aaa.'+a).show();
    if(a==1){
      $('#btnback').hide();
    }
    else
      $('#btnback').show();

    $("#show"+a).find(".option_ans").addClass("show");
    var t = $(".show").position().top - $("#show1").position().top;
    $(".test_answer").animate({ scrollTop: t}, 400);
  });
  
  $(document.body).on("click", "#btnagain", function(event)
  {
    //http://localhost/toeic4skill/index.php/main/show_fulltest/2
    window.location.assign(base_url + "index.php/main/show_fulltest/" + ma_de);
  });
});