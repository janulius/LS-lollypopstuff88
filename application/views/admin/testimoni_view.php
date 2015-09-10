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
			<h1 class="page-header">Testimoni —
			    <small>Input Testimoni Here</small>
			</h1>
		    </div>
		</div>

		<div class="row">

		    <?php echo form_open_multipart(base_url() . ADMIN_URL . '/testimoni/add-testimoni', array('class' => 'form-horizontal', 'role' => 'form')) ?>
			<div class="form-group">
			    <label for="input-picture-slideshow" class="col-sm-2 control-label">Picture</label>
			    <div class="fileinput fileinput-new" data-provides="fileinput">
				<div class="fileinput-new thumbnail" style="width: 224px; height: 399px;">
				    <img src="http://placehold.it/320x569" alt="holder">
				</div>
				<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 569px;"></div>
				<span class="help-block">
				    <b class="text-danger">Note:</b>
				    <span class="text-danger">File gambar tidak boleh mengandung spasi dan karakter selain angka dan huruf. <b>Max Size: 400KB</b></span>
				</span>
				<div>
				    <span class="btn btn-default btn-file">
					<span class="fileinput-new">Select image</span>
					<span class="fileinput-exists">Change</span>
					<input type="file" name="testimoni">
				    </span>
				    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				    <button type="submit" class="btn btn-primary">Upload</button>
				</div>
			    </div>
			</div>
		    <?php echo form_close() ?>

		</div>


		<div class="row">
		    <div class="col-lg-12">
			<h1 class="page-header">Testimoni —
			    <small>View Testimoni Here</small>
			</h1>
		    </div>
		</div>

		<div class="row">

		    <?php if ($testimonies): ?>
			<?php foreach ($testimonies as $testimonie): ?>
			    <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				    <img src="<?php echo $testimonie->URL ?>" alt="holder">
				    <div class="caption">
					<?php echo form_open(base_url() . ADMIN_URL . '/testimoni/delete-testimoni', array('class' => 'form-horizontal', 'role' => 'form')) ?>
					<?php echo form_hidden('id', $testimonie->ID) ?>
					<p>
					    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Delete</button>
					</p>
					<?php echo form_close() ?>
				    </div>
				</div>
			    </div>
			<?php endforeach; ?>
		    <?php else: ?>
			<div class="alert alert-info" role="alert">No testimonies uploaded.</div>
		    <?php endif ?>
		</div>


	    </div>
	    <!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'sbadmin.js.inc.php' ?>

    </body>

</html>
