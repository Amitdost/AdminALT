<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 column1">
            <div class="logo">TechBadhava</div>
            <div class="footer_desc">TechBadhava is a group of some friends, Who is work in Software Industry And We are trying to share knowledge with student.
        Who want start project with JAVA, PHP, REACT NATIVE And CODEIGNITER etc.</div>
            </div>
            <div class="col-md-4 column2">
                <h5>Category</h5>
                <ul>
                <?php foreach($post_cat as $cat)
                    echo '<li><a href="'. $cat->id .'">'. $cat->category .'</a></li>';
                ?>
                </ul>
            </div>
            <div class="col-md-4 column2">
                <h5>Social </h5>
                <a href="#"><img src="<?php echo base_url('uploads')?>/icons8-facebook-64.png"></a>
                &nbsp<a href="#"><img src="<?php echo base_url('uploads')?>/icons8-linkedin-64.png"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 copy_right">
                <br/>
                <p>© Copyright ©2019 All rights reserved By TechBadhava| This Blog Place with Your thinking</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>