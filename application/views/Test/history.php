<?php $this->load->view('layout/header');?>
    <div id="main">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-xs-12 col-md-3">
                    <?php $this->load->view('layout/left_home');?>
                </div>
                
                <div id="content" class="col-xs-6 col-md-9">
                    <div class="history">Lịch sử làm bài:</div>
                    <table id="tbhis" class="table table-hover" >
                        <tr style="background:#50CF50;color:white;">
                            <td>Ngày làm bài</td>
                            <td>Điểm số</td>
                        </tr>
                        <?php
                        foreach($history as $item)
                        {
                            $temp = $item['time'];
                        ?>
                            <tr>
                                <td><?php echo date('r',$temp); ?></td>
                                <td><a href="<?php echo base_url(); ?>index.php/main/show_result/<?php echo $item['id']; ?>"><?php echo $item['score']; ?></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    
                </div>
                
            </div>
            
        </div>
    </div><!--main-->

<?php $this->load->view('layout/footer');?>			