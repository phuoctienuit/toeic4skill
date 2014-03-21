<?php $this->load->view('layout/header');?>
    <div id="main">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-xs-12 col-md-3">
                    <?php $this->load->view('layout/left_home');?>
                </div>
                
                <div id="content" class="col-xs-6 col-md-9">
                <div class="level">Bắt đầu cuộc hành trình của bạn</div>
                <?php
                foreach($paras as $para)
                {
                    echo "<div class='funny_english'>";
                    echo "<a href='".  base_url()."index.php/main/paragraph/".$para['id']."'>".$para['name']."</a>";
                    echo "</div>";
                }
                ?>
                
                </div>
                
            </div>
            
        </div>
    </div><!--main-->

<?php $this->load->view('layout/footer');?>			