<link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
<div class="container">
		<div class="row">
			<div class="col-md-7">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<img src="<?php echo base_url('uploads/pexels-photo-67112.jpg')?>">
    </div>
    <div class="carousel-item">
	<img src="<?php echo base_url('uploads/pexels-photo-67112.jpg')?>">
    </div>
    <div class="carousel-item">
	<img src="<?php echo base_url('uploads/pexels-photo-67112.jpg')?>">
    </div>
  </div>
</div>
			</div>
			<div class="col-md-5">
				<div class="main-box">
					<h2>Create an account</h2>
					<?php $error=$this->session->flashdata('signup_sucess'); echo $error?>
					<?php $error=$this->session->flashdata('signup_fail'); echo $error?>
					<?php echo form_open('Login/signup');?>
					<label for="fullname">Full Name</label>
						<div class="form-group">
						<?php echo form_input(array('type'=>'text','name' =>'fullname','class'=>'form-control','required'=>'required','value'=>set_value('fullname')));
						echo form_error('fullname');
							?>
						</div>
					<label for="email_id">Email</label>
						<div class="form-group">
						<?php echo form_input(array('type'=>'email','name' =>'email_id','class'=>'form-control','required'=>'required','value'=>set_value('email_id')));
						echo form_error('email_id');
							?>
						</div>
						<label for="password">Password</label>
						<div class="form-group">
							<?php echo form_input(array('type'=>'password','name' =>'password','class'=>'form-control','required'=>'required','value'=>set_value('password')));
							echo form_error('password');
							?>
						</div>
						<label for="re-password">Re-Password</label>
						<div class="form-group">
							<?php echo form_input(array('type'=>'password','name' =>'re-password','class'=>'form-control','required'=>'required','value'=>set_value('re-password')));
							echo form_error('re-password');
							?>
						</div>
						<span>
							If you already register?<a href="<?php echo base_url("index.php/Admin/index")?>">SignIn</a>
						</span>
						<button type="submit" class="btn btn-primary btn-block" name="signupbtn" value="signupbtn">Create Account</button>
						</form>
				</div>
			</div>
		</div>
    </div>
    <script src="<?php echo base_url('assest/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
