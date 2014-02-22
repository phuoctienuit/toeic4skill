$(document).ready(function(){
  
  $(document.body).on("click", "#btnagain", function(event)
  {
    $("input:radio").attr("checked", false);
    $(".content_short_con").css("display","none");// for short con listening
    $("div.status").html("");
  });
  
  $(document.body).on("click", "#btnanswer", function(event)
  {
  	$("div.status").html("");
    $(".content_short_con").css("display","block");// for short con listening
  	$('div.option').each(function() {
    	var cur = $(this);
    	var stt = cur.attr("id");
    	var key = cur.find("input.key").val();
    	var user_ans = $("input[name='radioquestion"+stt+"']:checked").val();
    	if(key == user_ans)
    	{
    		cur.find("div.status."+key).html("<img class='true' src='"+base_url+"application/template/image/icon_true.jpg' />");
    	}
    	else
    	{

    		cur.find("div.status."+key).html("<img class='true' src='"+base_url+"application/template/image/icon_true.jpg' />");
    		cur.find("div.status."+user_ans).html("<img class='false' src='"+base_url+"application/template/image/icon_false.jpg' />");
    	}
	});
  });
   $(document.body).on("click", "#btnsubmit", function(event)
  {
  	$("div.status").html("");
  	$('div.option').each(function() {
    	var cur = $(this);
    	var stt = cur.attr("id");
    	var key = cur.find("input.key").val();
    	var user_ans = $("input[name='radioquestion"+stt+"']:checked").val();
    	if(key == user_ans)
    	{
    		cur.find("div.status."+key).html("<img class='true' src='"+base_url+"application/template/image/icon_true.jpg' />");
    	}
    	else
    	{

    		//cur.find("div.status."+key).html("<img class='true' src='"+base_url+"application/template/image/icon_true.jpg' />");
    		cur.find("div.status."+user_ans).html("<img class='false' src='"+base_url+"application/template/image/icon_false.jpg' />");
    	}
	});
  });

});