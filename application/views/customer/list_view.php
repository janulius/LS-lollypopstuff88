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
           <?php include 'filter.inc.php' ?>
           <div id="content" class="col-lg-9 no-padding">
                <div class="col-lg-12 title no-padding change-view">
                    <a class="view list pull-right">List</a>
                    <a class="view grid pull-right" style="">Grid</a>
                </div>
                <div class="col-lg-12 no-padding prodWrap">
                    <div class="col-lg-3 prodList-3">
                        <div class="prodImg col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><img src="<?php echo ASSETS . 'img/products/PRODUCT0000000000001.jpg' ?>" alt="no-image"></a>
                        </div>
                        <div class="prodTitle col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><h5>CASUAL BATWING CARDIGAN</h5></a>
                        </div>
                        <div class="prodPrice col-lg-12 no-padding text-center">
                            Rp 100.000.000
                        </div>
                        <div class="prodDesc col-lg-12 no-padding text-center">
                            <p>Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit</p>
                        </div>
                    </div>
                    <div class="col-lg-3 prodList-3">
                        <div class="prodImg col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><img src="<?php echo ASSETS . 'img/products/PRODUCT0000000000001.jpg' ?>" alt="no-image"></a>
                        </div>
                        <div class="prodTitle col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><h5>CASUAL BATWING CARDIGAN</h5></a>
                        </div>
                        <div class="prodPrice col-lg-12 no-padding text-center">
                            Rp 100.000.000
                        </div>
                        <div class="prodDesc col-lg-12 no-padding text-center">
                            <p>Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit</p>
                        </div>
                    </div>
                    <div class="col-lg-3 prodList-3">
                        <div class="prodImg col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><img src="<?php echo ASSETS . 'img/products/PRODUCT0000000000001.jpg' ?>" alt="no-image"></a>
                        </div>
                        <div class="prodTitle col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><h5>CASUAL BATWING CARDIGAN</h5></a>
                        </div>
                        <div class="prodPrice col-lg-12 no-padding text-center">
                            Rp 100.000.000
                        </div>
                        <div class="prodDesc col-lg-12 no-padding text-center">
                            <p>Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit</p>
                        </div>
                    </div>
                    <div class="col-lg-3 prodList-3">
                        <div class="prodImg col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><img src="<?php echo ASSETS . 'img/products/PRODUCT0000000000001.jpg' ?>" alt="no-image"></a>
                        </div>
                        <div class="prodTitle col-lg-12 no-padding text-center">
                            <a href="<?php echo base_url() . 'index.php/customer/detail_controller' ?>"><h5>CASUAL BATWING CARDIGAN</h5></a>
                        </div>
                        <div class="prodPrice col-lg-12 no-padding text-center">
                            Rp 100.000.000
                        </div>
                        <div class="prodDesc col-lg-12 no-padding text-center">
                            <p>Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit Cuma ad ukuran allsize aja ya, Bahan knit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="pagination pull-right">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
           </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include 'footer.inc.php'; ?>

    <?php include 'js.inc.php'; ?>

</body>

</html>
