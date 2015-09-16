<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'head.inc.php'; ?>

</head>

<body>

    <?php
         // include 'brand.inc.php' 
    ?>

    <?php include 'nav.inc.php' ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong><?php echo SHOP_NAME ?></strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
		    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126933.01517393028!2d106.65003400000002!3d-6.176687550000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8e853d2e38d%3A0x301576d14feb9c0!2sTangerang%2C+Tangerang+City%2C+Banten!5e0!3m2!1sen!2sid!4v1415361957595"></iframe>
                </div>
                <div class="col-md-4">
		    <p><img src="<?php echo ASSETS . 'img-custom/logo-instagram.png' ?>" />
                        <strong><?php echo ACCOUNT_INSTAGRAM ?></strong>
                    </p>
		    <p><img src="<?php echo ASSETS . 'img-custom/logo-line.png' ?>" />
                        <strong><?php echo ACCOUNT_LINE ?></strong>
                    </p>
                    <p><img src="<?php echo ASSETS . 'img-custom/logo-whatsapp.png' ?>" />
                        <strong><?php echo ACCOUNT_PHONE ?></strong>
                    </p>
		    <p><img src="<?php echo ASSETS . 'img-custom/logo-bbm.png' ?>" />
                        <strong><?php echo ACCOUNT_BBM ?></strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include 'footer.inc.php'; ?>

    <?php include 'js.inc.php'; ?>

</body>

</html>
