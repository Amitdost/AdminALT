  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                <!-- box-header -->
                    <div class="box-header">
                    <h3 class="box-title">Unpublished Post</h3>
                    </div>
                <!---box-body -->    
                    <div class="box-body">
                        <div id="accordion">
                        <?php foreach($unpublished_data as $data){?>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="<?php echo '#'.$data->id;?>">
                                        <?php echo $data->title;?>
                                        <?php echo $data->cat;?>
                                        <?php echo $data->created;?>
                                    </a>
                                </div>
                                <div id="<?php echo '#'.$data->id;?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo $data->post;?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                <!---box-footer -->
                    <div class="box-footer">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>