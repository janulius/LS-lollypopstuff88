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
			<h1 class="page-header">Resi —
			    <small>Input Resi Here</small>
			</h1>
		    </div>
		</div>

		<div class="row">
		    <?php echo form_open(base_url() . ADMIN_URL . '/resi/manage-resi', array('class' => 'form-horizontal', 'role' => 'form')) ?>
		    <div class="form-group">
			<div class="col-sm-12">
			    <?php echo form_textarea(array('name' => 'resi', 'class' => 'ckeditor', 'value' => $resies ? $resies[0]->CONTENT : '')) ?>
			    <span class="help-block"><b>Note:</b> Copy and paste your resi in the box.</span>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="submit" class="btn btn-primary">Publish Resi</button>
			</div>
		    </div>
		    <?php echo form_close() ?>
		</div>


	    </div>
	    <!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'sbadmin.js.inc.php' ?>

	<!--ckeditor-->
	<script src="<?php echo ASSETS . 'ckeditor/ckeditor.js' ?>"></script>


    </body>

</html>
