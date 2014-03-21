<?php $this->load->view('layout/header');?>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/paragrap.css">
    <div id="main">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-xs-12 col-md-3">
                    <?php $this->load->view('layout/left_home');?>
                </div>
                <div id="content" class="col-xs-6 col-md-9">
                    <div class="name_video"><?php echo $paras->name;?></div>
                    <script type="text/javascript" src="<?php echo base_url(); ?>application/template/js/swfobject.js"></script>    
                    <div id="ytapiplayer">
                        You need Flash player 8+ and JavaScript enabled to view this video.
                    </div>
                    <div class="goiy"><b>Hints:</b><span id="goiy" style="color:red;"></span></div>
                    <div id="text">
                        <?php echo str_replace ("|", "<input type='text' class='ans' name='gaps[]' />", $content); ?>
                    </div>
                    <button type="button" class="btn btn-primary" id="btnagaingap">AGAIN</button>
                     <script type="text/javascript">
                        $(document).ready(function(){
  
                              $(document.body).on("click", "#btnagaingap", function(event)
                              {
                                location.reload();
                              });
                        });
                     </script>
                      <script type="text/javascript">
                            var i = 0;
                            var params = { allowScriptAccess: "always" };
                            var atts = { id: "myytplayer" };
                                var videoID = "<?php echo $video; ?>";
                            swfobject.embedSWF("http://www.youtube.com/v/"+videoID+"?enablejsapi=1&playerapiid=ytplayer&version=3",
                                               "ytapiplayer", "425", "356", "8", null, null, params, atts);

                            window.onYouTubePlayerReady = function(playerId) 
                            {
                                ytplayer = document.getElementById("myytplayer");
                            }
                            var miss= new Array();
                            <?php
                            foreach($missing as $item)
                            {
                                echo "temp = new Object();";
                                echo "temp.tg = ".$item['thoigian'].";";
                                echo "temp.goiy = '".$item['goiy']."';";
                                echo "temp.key = '".$item['dapan']."';";
                                echo "miss.push(temp);";
                            }
                            ?>
                            function kt()
                            {
                                var a = ytplayer.getCurrentTime();
                                var b = ytplayer.getDuration();
                                if(a >= b)
                                {
                                    show();
                                    return;
                                }
                                var n = miss.length;
                                i = 0;
                                while(i<n-1 && a > miss[i].tg)
                                    i++;
                                $("input.ans:eq("+i+")").focus();
                                $("span#goiy").html(miss[i].goiy);
                            }
                            function show()
                            {
                                clearInterval(myVar);
                                $("input.ans").each(function(index)
                                {
                                    var a = $(this).val();
                                    if(a==miss[index].key)
                                        $("input.ans:eq("+index+")").css({"background":"#38B44A","color":"white","font-weight":"bold"});
                                    else
                                        $("input.ans:eq("+index+")").css({"background":"#DF283C","color":"white","font-weight":"bold","text-decoration":"line-through"});
                                });
                            }
                            var myVar=setInterval(function(){kt()},2000);
                            $(document).ready(function()
                            {
                                $(document.body).on("click", ".goiy div", function(event)
                                {
                                    var val = $(this).html();
                                    $("input.ans:eq("+i+")").val(val);
                                });
                            });
                      </script>
                </div>
            </div>
        </div>
    </div><!--main-->

<?php $this->load->view('layout/footer');?>