<!DOCTYPE html>
<html lang="en">

    <head>

	<?php include 'head.inc.php'; ?>

    </head>

    <body>

	<?php include 'brand.inc.php' ?>

	<?php include 'nav.inc.php' ?>

	<div class="container">

	    <div class="row">
		<div class="box">
		    <div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Daftar
			    <strong>Resi</strong>
			</h2>
			<hr>

			<?php if($resies[0]->CONTENT !== ''): ?>
			<div class="col-lg-6 col-lg-offset-3 text-center">
			    <p><?php echo $resies[0]->CONTENT ?></p>
			</div>
			<?php else: ?>
			<div class="col-lg-12 col-md-12">
			    <div class="alert alert-info" role="alert">No Resi Added.</div>
			</div>
			<?php endif ?>

		    </div>
		</div>
	    </div>

	</div>
	<!-- /.container -->

	<?php include 'footer.inc.php'; ?>

	<?php include 'js.inc.php'; ?>

	<!-- Script to Activate the Carousel -->
	<script>
	    $('.carousel').carousel({
		interval: 5000 //changes the speed
	    })
	</script>

    </body>
</html>
