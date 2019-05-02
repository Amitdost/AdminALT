    <div class="custom-container">
    <?php 
    foreach($post_data['live_post'] as $post){?>
    <div class="box" style="background:url(<?php echo base_url('uploads/post-1.jpg')?>)">
        <div class="description">
            <div>
            <a href="<?php echo base_url("index.php/Post/sub_page")."?cat=".$post->cat."&post=".$post->id?>">
                <span class="category">
                    <?php echo $post->cat?>
                </span>
            </a>
                <span class="update_on">
                    <?php echo date("jS F Y",strtotime($post->created))?>
                </span>
            </div>
            <div>
                <p>
                    <a href="#" style="color:white">
                        <?php echo $post->title?>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
    <div class="section_heading">
        <h1>Recent Post</h1>
    </div>
    <div class="recent-post">
        <?php foreach( $post_data['recent_post'] as $recent_post){?>
        <div class="box">
            <a href="#">
                <img src="<?php echo base_url('uploads/post-5.jpg')?>">
            </a>
            <div>
            <a href="<?php echo base_url("index.php/Post/sub_page")."?cat=".$recent_post->cat."&post=".$recent_post->id?>">
                    <span class="category"><?php echo $recent_post->cat?></span>
                </a>
                <span class="update_on"><?php $date=$recent_post->created; echo date("jS F Y",strtotime($date))?></span>
            </div>
            <a href="<?php echo base_url("index.php/Post/sub_page")."?cat=".$recent_post->cat."&post=".$recent_post->id?>">
                <span class="title"><?php echo $recent_post->title?></span>
            </a>
        </div>
        <?php } ?>
    </div>
