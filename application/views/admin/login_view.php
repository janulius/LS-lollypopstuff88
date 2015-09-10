<!DOCTYPE html>
<html lang="en">

    <head>

	<?php include 'head.inc.php'; ?>

	<style>
	    .panel-heading {
		padding: 5px 15px;
	    }

	    .panel-footer {
		padding: 1px 15px;
		color: #A0A0A0;
	    }

	    .profile-img {
		width: 96px;
		height: 96px;
		margin: 0 auto 10px;
		display: block;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
	    }
	</style>

    </head>

    <body>

	<?php include 'brand.inc.php' ?>

	<div class="container">

	    <div class="row">
		<div class="box">
		    <div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Login
			    <strong>Administrator</strong>
			</h2>
			<hr>


			<div class="row">
			    <div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				    <div class="panel-body">
					<?php echo validation_errors() ?>
					<?php echo form_open(ADMIN_URL . '/login', array('role' => 'form')) ?>
					    <fieldset>
						<div class="row">
						    <div class="center-block">
							<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
						    </div>
						</div>
						<div class="row">
						    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
							<div class="form-group">
							    <div class="input-group">
								<span class="input-group-addon">
								    <i class="glyphicon glyphicon-user"></i>
								</span>
								<?php echo form_input(array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => 'autofocus', 'required' => 'required')) ?>
							    </div>
							</div>
							<div class="form-group">
							    <div class="input-group">
								<span class="input-group-addon">
								    <i class="glyphicon glyphicon-lock"></i>
								</span>
								<?php echo form_password(array('name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'autofocus' => 'autofocus', 'required' => 'required')) ?>
							    </div>
							</div>
							<div class="form-group">
							    <?php echo form_submit(array('class' => 'btn btn-lg btn-primary btn-block', 'value' => 'Sign in')) ?>
							</div>
						    </div>
						</div>
					    </fieldset>
					<?php echo form_close() ?>
				    </div>
				</div>
			    </div>
			</div>

			<div class="row">
			    <div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				    <div class="panel-body text-center">
					<a href="<?php echo base_url() ?>" target="_blank">Go to LollyPopStuff88 Shop.</a>
				    </div>
				</div>
			    </div>
			</div>

		    </div>
		</div>


	    </div>
	</div>
	<!-- /.container -->

	<?php include 'footer.inc.php'; ?>

	<?php include 'js.inc.php'; ?>

    </body>
</html>
