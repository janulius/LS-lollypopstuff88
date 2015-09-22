<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'head.inc.php'; ?>

</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <?php
         // include 'brand.inc.php' 
    ?>

    <?php include 'nav.inc.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 detail-title">
                <h1>Casual Batwing Cardigan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-4 no-padding">
                    <div class="col-lg-12 no-padding detailImg">
                        <img src="<?php echo ASSETS . 'img/products/PRODUCT0000000000002.jpg' ?>" />
                    </div>
                </div>
                <div class="col-lg-6 no-padding">
                    <div class="col-lg-12">
                        <ul class="prodDetailDesc">
                            <li> > aaaaaaaaaa</li>
                            <li> > bbbbbbbbbb</li>
                            <li> > cccccccccc</li>
                        </ul>
                    </div>
                    <div class="col-lg-12 prodDetailPrice">
                        <span id="price">Rp 95.000</span>
                    </div>
                    <div class="col-lg-12 facebook">
                        <div class="fb-comments" data-href="http://localhost:8080/LS/index.php/customer/detail_controller"></div>
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
