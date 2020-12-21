
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row px-3">
			<div class="col-lg-10  card flex-row mx-auto px-0">
				<div class="img-left d-none d-md-flex">     


					<img src="<?php echo base_url()?>assets/images/undraw_fingerprint_swrc.svg" alt="" class="login_img">




				</div>

				<div class="card-body">
					<h5 class="logo"><i class="fa fa-snowflake-o"></i> DivInfo Tech</h5>
					<h4 class="title text-center mt-4">
						Login into account
					</h4>
                    <div class="" >
                    </div>
					<form class="form-box px-3" action="<?php echo base_url().'login/auth'?>" name="lform" id="lform"  method="post">
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="username" id="username" placeholder="User Name "  tabindex="10" >
						</div>
                        <?php echo form_error('username')?>
						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="password" name="password" id="password" placeholder="Password"  >
						</div>
                        <?php echo form_error('password')?>

						<div class="mb-3">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="cb1" name="">
								<label class="custom-control-label" for="cb1">Remember me</label>
							</div>
						</div>
						<div class="mb-3">
							<button type="submit" class="btn btn-block text-uppercase">
								Login
							</button>              
						</div>

					</form>

					<!-- <div class="text-center mb-2">
						Don't have an account?
						<a href="#" class="register-link">
							Register here
						</a>
					</div> -->
					<div class="footer mt-4">
					<h5 class="foot">&copy; Designed by <i class="fa fa-snowflake-o"></i> DivInfo Tech </h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>