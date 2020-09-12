<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3> Admin </h3>
			</div>
			<div class="card-body">
			<div  id = "flash-messages" class="d-flex justify-content-center links">
			<?php  if($error=$this->session->flashdata('Login_failed')) { ?>

				<?php echo $error; ?>

				<?php }?>

				</div>
				<form action="<?php echo site_url('Admin/login'); ?>" method="post"  class="clearfix" >
				</br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name = "username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name = "password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me 
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
$(function(){
  $("#flash-messages").click(function(){$(this).hide()});
});
</script>


