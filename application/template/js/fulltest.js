$(document).ready(function(){
  $('.aaa').hide();
  $('.aaa.1').show();
  $('#btnback').hide();
  var a=1;
  var num= $('.aaa').length

  $(document.body).on("click", "#btnnext", function(event)
  {
    a=a+1;
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

  });
   $(document.body).on("click", "#btnback", function(event)
  {
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
  });
   var key=[];
   $( ".key" ).each(function() {
      key.push($( this ).val());
    });
   var result =0;
   var numlis =0;
   var numread =0;
   var lis_score= ["15","20","25","30","35","40","45","50","55","60","65","70","75","80","85","90","95","100","105","110","115","120","125","130","135","140","145","150","155","160","165","170","175","180","185","190","195","200","205","210","215","220","225","230","235","240","245","250","255","260","265","270","275","280","285","290","295","300","305","310","315","320","325","330","335","340","345","350","355","360","365","370","375","380","385","390","395","400","405","410","415","420","425","430","435","440","445","450","455","460","465","470","475","480","485","490","495","495","495","495"];
   var read_score=["10","10","10","15","20","25","30","35","40","45","50","55","60","65","70","75","80","85","90","95","100","105","110","115","120","125","130","135","140","145","150","155","160","165","170","175","180","185","190","195","200","205","210","215","220","225","230","235","240","245","250","255","260","265","270","275","280","285","290","295","300","305","310","315","320","325","330","335","340","345","350","355","360","365","370","375","380","385","390","395","400","405","410","415","420","425","430","435","440","445","450","455","460","465","470","475","480","485","490","495"];
   $(document.body).on("click", "#btnanswer", function(event)
  {
    result=0;
    $("div.status").html("");
    $('div.option_ans').each(function() {
      var cur = $(this);
      var stt = cur.attr("id");
      var user_ans = $("input[name='radioquestion"+stt+"']:checked").val();
      var ans= key[stt-1];

      if(ans == user_ans)
      {
        if(stt<=100)
        {
          numlis =numlis+1;
        }
        else
          numread =numread+1;
        result=result+1;
        cur.find("div.status."+ans).html("<img class='true' src='"+base_url+"application/template/image/icon_true.jpg' />");
        $("#result").html(result);

      }
      else
      {

        cur.find("div.status."+ans).html("<img class='true' src='"+base_url+"application/template/image/icon_true.jpg' />");
        cur.find("div.status."+user_ans).html("<img class='false' src='"+base_url+"application/template/image/icon_false.jpg' />");
      }

  });
    var list_result;
    if (numlis==0) list_result=0;
    else
    list_result=lis_score[numlis-1];
    var read_result;
    if (numread==0) read_result=0;
    else
    read_result=read_score[numlis-1];
    var total=parseInt(list_result)+parseInt(read_result);
    alert("Kết quả bài thi:\n Bạn được:\n"+list_result+" điểm phần listening.\n"+read_result+" điểm phần reading.\nTổng cộng: "+total+" điểm.\nHệ thống sẽ ghi nhận số điểm của bạn");
  });
});