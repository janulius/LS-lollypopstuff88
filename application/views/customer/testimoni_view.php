<!DOCTYPE html>
<html lang="en">

    <head>

	<?php include 'head.inc.php'; ?>

	<style>

	    .testimonials blockquote {
		position: relative;
		background: white;
		min-height: 150px;
		margin-top: 20px;
		margin-bottom: 100px;
		border: 1px solid #ecedf1;
	    }
	    .testimonials blockquote:before {
		content: '';
		position: absolute;
		bottom: -10px;
		left: 50%;
		margin-left: -10px;
		border-top: 10px solid #ecedf1;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
	    }
	    .testimonials blockquote:after {
		content: '';
		position: absolute;
		bottom: -8px;
		left: 50%;
		margin-left: -9px;
		border-top: 9px solid white;
		border-left: 9px solid transparent;
		border-right: 9px solid transparent;
	    }

	    .testimonials blockquote img {
		height: 50px;
		width: 50px;
		position: absolute;
		border: 1px solid #ecedf1;
		background: white;
		bottom: -65px;
		left: 50%;
		margin-left: -25px;
	    }

	    blockquote p.clients-words {
		font-size: 14px;
	    }
	    span.clients-name {
		font-size: 14px;
		position: absolute;
		bottom: 10px;
		right: 10px;
	    }

	</style>

    </head>

    <body>

	<?php include 'brand.inc.php' ?>

	<?php include 'nav.inc.php' ?>

	<div class="container">

	    <div class="row">
		<div class="box">
		    <div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Testimoni
			    <strong>Pelanggan</strong>
			</h2>
			<hr>


			<div class="row">
			    <?php if ($testimonies): ?>
			    <?php foreach ($testimonies as $testimonie): ?>
			    <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				    <img src="<?php echo $testimonie->URL ?>" />
				</div>
			    </div>
			    <?php endforeach; ?>
			    <?php else: ?>
				<div class="alert alert-info" role="alert">No testimonies uploaded.</div>
			    <?php endif ?>
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
