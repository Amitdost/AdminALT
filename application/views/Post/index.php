<!-- Content Wrapper. Contains page content -->
<script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
   <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                <!-- box-header -->
                    <div class="box-header">
                    <h3 class="box-title">What's in your mind?</h3>
                    <?php
                        $message = $this->session->flashdata('item');
                        ?>
                        <div class="<?php echo $message['class']?>"><?php echo $message['message']; ?></div>
                    </div>
                <!---box-body -->   
                    <div class="box-body">
                    <?php echo form_open('Admin/save_post');?>

                    <div class="form-group">
                        <label>Post Category</label>
                        <select class="form-control" name='post_cat'>
                            <?php foreach($post['cat'] as $cat_post)
                            {
                                echo '<option valu="'. $cat_post->id .'">'. $cat_post->category .'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Parent Post</label>
                        <select class="form-control" name="parent_post">
                            <option value="0"> New Post </option>
                            <?php foreach($post['parent_post'] as $p_post)
                            {
                                echo '<option valu="'. $p_post->id .'">'. $p_post->title .'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Your Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="mytextarea">Content</label>
                        <textarea id="mytextarea" name="post_content"></textarea>
                    </div>
                    </div>
                <!---box-footer -->
                    <div class="box-footer">
                    <button type="submit" id="save_post" class="btn btn-success btn-lg">Save Post</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>