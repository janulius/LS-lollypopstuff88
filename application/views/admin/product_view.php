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
			<h1 class="page-header">Product —
			    <small>Input Product Here</small>
			</h1>
		    </div>
		</div>

		<div class="row">

		    <?php echo isset($upload_error_data) ? $upload_error_data : '' ?>
		    <?php echo isset($upload_success_data) ? $upload_success_data : '' ?>

		    <?php echo form_open_multipart(base_url() . ADMIN_URL . '/product/add-product', array('class' => 'form-horizontal', 'role' => 'form')) ?>
			<div class="form-group">
			    <label for="input-picture-slideshow" class="col-sm-2 control-label">Product Picture</label>
			    <div class="fileinput fileinput-new" data-provides="fileinput" style="padding-left: 1.5%">
				<div class="fileinput-new thumbnail" style="width: 250px; height: 250px;">
				    <img src="http://placehold.it/300x300" alt="holder">
				</div>
				<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 300px;"></div>
				<span class="help-block">
				    <b class="text-danger">Note:</b>
				    <span class="text-danger">File gambar tidak boleh mengandung spasi dan karakter selain angka dan huruf. <b>Max Size: 400KB</b></span>
				</span>
				<div>
				    <span class="btn btn-default btn-file">
					<span class="fileinput-new">Select image</span>
					<span class="fileinput-exists">Change</span>
					<input type="file" name="image">
				    </span>
				    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				</div>
			    </div>
			</div>
			<div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Product Name</label>
			    <div class="col-sm-10">
				<?php echo form_input(array('name' => 'name', 'class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name')) ?>
				<small class="help-block"><b>Maximum:</b> 255 characters.</small>
			    </div>
			</div>
			<div class="form-group">
			    <label for="description" class="col-sm-2 control-label">Product Description</label>
			    <div class="col-sm-10">
				<?php echo form_textarea(array('name' => 'description', 'class' => 'ckeditor', 'id' => 'description')) ?>
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Submit Product</button>
			    </div>
			</div>
		    <?php echo form_close() ?>
		</div>


		<div class="row">
		    <div class="col-lg-12">
			<h1 class="page-header">Product —
			    <small>View Product Here</small>
			</h1>
		    </div>
		</div>

		<div class="row">

		    <?php if ($products): ?>
		    <?php foreach ($products as $product): ?>
    		    <div class="col-sm-6 col-md-4">
    			<div class="thumbnail">
    			    <img src="<?php echo $product->IMAGE ?>" alt="product" style="margin-top: 2%">
    			    <div class="caption">
    				<h3><?php echo $product->NAME ?></h3>
    				<p><?php echo $product->DESCRIPTION ?></p>
				<p>
				    <?php echo form_open(base_url() . ADMIN_URL . '/product/delete-product', array('class' => 'form-horizontal', 'role' => 'form')) ?>
				    <?php echo form_hidden('id', $product->ID) ?>
				    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#edit-product-' . $product->ID ?>"><i class="fa fa-pencil fa-fw"></i>Edit</button>
				    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Delete</button>
				    <?php echo form_close() ?>
				</p>
    			    </div>
    			</div>
    		    </div>

		    <div class="modal fade" id="<?php echo 'edit-product-' . $product->ID ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog modal-lg">
			    <?php echo form_open(base_url() . ADMIN_URL . '/product/edit-product', array('role' => 'form')) ?>
    			    <div class="modal-content">
    				<div class="modal-header">
    				    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    				    <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
    				</div>
    				<div class="modal-body">
				    <div class="form-group">
    					<label for="name" class="col-sm-2 control-label">Name</label>
    					<div class="col-sm-10">
					    <?php echo form_hidden('id', $product->ID) ?>
					    <?php echo form_input(array('name' => 'name', 'class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name', 'value' => $product->NAME)) ?>
    					</div>
    				    </div>
    				    <br /> <br />
    				    <div class="form-group">
    					<label for="description" class="col-sm-2 control-label">Description</label>
    					<div class="col-sm-10">
					    <?php echo form_textarea(array('name' => 'description', 'class' => 'ckeditor', 'id' => 'description', 'placeholder' => 'Description', 'rows' => '8', 'value' => $product->DESCRIPTION)) ?>
    					</div>
    				    </div>
    				</div>
    				<div class="modal-footer">
    				    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				    <button type="submit" class="btn btn-primary">Save changes</button>
    				</div>
    			    </div>
			    <?php echo form_close() ?>
    			</div>
    		    </div>
		    <?php endforeach ?>
		    <?php else: ?>
		    <div class="alert alert-info" role="alert">No Products Added.</div>
		    <?php endif ?>

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
