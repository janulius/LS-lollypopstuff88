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
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 no-padding slider-home" style="background-color:#FADDEF;">
	            <ul class="frontSlider" style="list-style-type:none">
	                <li>
	                  <a href="#">
	                    <img src="assets/img/slideshow01.jpg" />
	                  </a>
	                </li>
	                <li>
	                  <a href="#">
	                    <img src="assets/img/slideshow02.jpg" />
	                  </a>
	                </li>
	                <li>
	                  <a href="#">
	                    <img src="assets/img/slideshow03.jpg" />
	                  </a>
	                </li>
	                <li>
	                  <a href="#">
	                    <img src="assets/img/slideshow04.jpg" />
	                  </a>
	                </li>
	            </ul> 
	        </div>
        </div>
        <div class="row" style="padding-top:20px;">
        	<div class="col-lg-3 no-padding aside-main">
        		<div class="col-lg-12 title">
        			<h2>Kontak</h2>
        		</div>
        		<div class="col-lg-12 contact-logo">
        			<img src="assets/img/sms.png" alt="no-image">
        			<span>087778508815</span>
        		</div>
        		<div class="col-lg-12 contact-logo">
        			<img src="assets/img/Whatsapp.png" alt="no-image">
        			<span>087778508815</span>
        		</div>
        		<!-- <div class="col-lg-12 contact-logo">
        			<img src="assets/img/Blackberry.png" alt="no-image">
        			<span>234BE0FD</span>
        		</div> -->
        		<div class="col-lg-12 contact-logo">
        			<img src="assets/img/line.png" alt="no-image">
        			<span>@VIALAVENIA</span>
        		</div>
        		<div class="col-lg-12 contact-logo last">
        			<a href="https://instagram.com/lollypopstuff88/" target="_blank"><img src="assets/img/instagram.png" alt="no-image"></a>
        			<span>LOLLYPOPSTUFF88</span>
        		</div>
        		<div class="col-lg-12 title">
        			<h2>Cara Pembelian</h2>
        		</div>
        		<div class="col-lg-12 how-to-purchase">
        			<ol>
						<li>Hubungi salah satu dari kontak yang tersedia (lihat pada link <b>kontak</b> di atas).</li>
						<li>Pemesanan dilakukan secara langsung melalui kontak tersebut.</li>
						<li>Pengiriman dilakukan menggunakan JNE/TIKI/Wahana (pilih salah satu).</li>
						<li>Ongkos kirim dapat dilihat pada website kurir.</li>
						<li>Resi dapat dilihat pada bagian resi diatas.</li>
						<li>Pembayaran dilakukan melalui salah satu rekening yang tertera di bawah ini.</li>
					</ol>
        		</div>
        		<div class="col-lg-12 title">
        			<h2>Nomor Rekening</h2>
        		</div>
        		<div class="col-lg-12 bank text-center">
        			<img src="assets/img/rek-bca.gif" alt="no-image">
        		</div>
        		<div class="col-lg-12 info-rek-bank text-center">
        			<span>7130319461 a/n Via Lavenia</span>
        		</div>
        		<div class="col-lg-12 bank text-center">
        			<img src="assets/img/rek-mandiri.gif" alt="no-image">
        		</div>
        		<div class="col-lg-12 info-rek-bank text-center">
        			<span>1550005579340 a/n Via Lavenia</span>
        		</div>
        		<div class="col-lg-12 bank text-center">
        			<img src="assets/img/rek-bri.gif" alt="no-image">
        		</div>
        		<div class="col-lg-12 info-rek-bank text-center last">
        			<span>721101005449532 a/n Via Lavenia</span>
        		</div>
        		<div class="col-lg-12 title">
        			<h2>Supported Courier</h2>
        		</div>
        		<div class="col-lg-12 courier text-center">
        			<img src="assets/img/jne.png" alt="no-image">
        		</div>
        		<div class="col-lg-12 courier text-center">
        			<img src="assets/img/tiki.png" alt="no-image">
        		</div>
        		<div class="col-lg-12 courier text-center last">
        			<img src="assets/img/wahana.png" alt="no-image">
        		</div>
        		<div class="col-lg-12 title">
        			<h2>Who is Online</h2>
        		</div>
        	</div> 
        	<div class="col-lg-9 no-padding"></div>
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
        $.ajax({
            url: '/path/to/file',
            type: 'default GET (Other values: POST)',
            dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            data: {param1: 'value1'},
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
	</script>

    </body>
</html>
