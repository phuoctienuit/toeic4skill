$(document).ready(function(){
  
  $(document.body).on("click", "#btnagain", function(event)
  {
    $("input:radio").attr("checked", false);
    $("div.status").html("");
    $(".show_answer").css("display","none");
    $(".group_content").css("display","none");
  });
  
  $(document.body).on("click", "#btnanswer", function(event)
  {
  	$("div.status").html("");
    $("div.letter").css("float","left");
    $(".show_answer").css("display","block");
    $(".group_content").css("display","block");
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