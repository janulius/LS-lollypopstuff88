<!DOCTYPE html>
<html lang="en">

    <head>

	<?php include 'sbadmin.head.inc.php' ?>

    </head>

    <body>

	<div id="wrapper">

	    <!-- Navigation -->
	    <?php include 'sbadmin.nav.inc.php' ?>


	    <div id="page-wrapper">
		<div class="row">
		    <div class="col-lg-12">
			<h1 class="page-header">Slideshow —
			    <small>Input Slideshow Here</small>
			</h1>
		    </div>
		</div>

		<div class="row">

		    <?php echo isset($upload_error_data) ? $upload_error_data : '' ?>
		    <?php echo isset($upload_success_data) ? $upload_success_data : '' ?>

		    <?php echo form_open_multipart(base_url() . ADMIN_URL . '/home/upload-slideshow', array('class' => 'form-horizontal', 'role' => 'form')) ?>
		    <!--<form class="form-horizontal" role="form">-->
			<div class="form-group">
			    <label for="input-picture-slideshow" class="col-sm-2 control-label">Picture</label>
			    <div class="fileinput fileinput-new" data-provides="fileinput">
				<div class="fileinput-new thumbnail" style="width: 419px; height: 200px;">
				    <img src="http://placehold.it/843x403" alt="holder">
				</div>
				<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 843px; max-height: 403px;"></div>
				<span class="help-block">
				    <b class="text-danger">Note:</b>
				    <span class="text-danger">File gambar tidak boleh mengandung spasi dan karakter selain angka dan huruf. <b>Max Size: 400KB</b></span>
				</span>
				<div>
				    <span class="btn btn-default btn-file">
					<span class="fileinput-new">Select image</span>
					<span class="fileinput-exists">Change</span>
					<input type="file" name="slideshow">
				    </span>
				    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				    <button type="submit" class="btn btn-primary">Upload</button>
				</div>
			    </div>
			</div>
		    <!--</form>-->
		    <?php echo form_close() ?>
		</div>



		<div class="row">
		    <div class="col-lg-12">
			<h1 class="page-header">Slideshow —
			    <small>View Uploaded Slideshow</small>
			</h1>
		    </div>
		</div>

		<div class="row">
		    <?php if ($slideshows): ?>

			<?php foreach ($slideshows as $slideshow): ?>
			    <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				    <img src="<?php echo $slideshow->URL ?>" alt="holder">
				    <div class="caption">
					<?php echo form_open(base_url() . ADMIN_URL . '/home/delete-slideshow') ?>
					<?php echo form_hidden('picture', $slideshow->ID) ?>
					<p>
					    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Delete</button>
					</p>
					<?php echo form_close() ?>
				    </div>
				</div>
			    </div>
			<?php endforeach; ?>

		    <?php else: ?>
			<div class="alert alert-info" role="alert">No picture uploaded.</div>
		    <?php endif ?>
		</div>

	    </div>
	    <!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'sbadmin.js.inc.php' ?>

    </body>

</html>
