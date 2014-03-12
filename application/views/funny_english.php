<?php $this->load->view('layout/header');?>
    <div id="main">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-xs-12 col-md-3">
                    <?php $this->load->view('layout/left_home');?>
                </div>
                
                <div id="content" class="col-xs-6 col-md-9">
                
                <?php
                foreach($paras as $para)
                {
                    echo "<a href='".  base_url()."index.php/main/paragraph/".$para['id']."'>Bài ".$para['id']."</a>";
                }
                ?>
                    
                </div>
                
            </div>
            
        </div>
    </div><!--main-->

<?php $this->load->view('layout/footer');?>			