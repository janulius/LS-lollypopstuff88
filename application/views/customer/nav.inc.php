<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-3 hidden-xs no-padding">
    			<img class="logo img-responsive" src="assets/img/new-logo.png" alt="no-image">
    		</div>
    		<div class="col-sm-9 no-padding">
    			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    </button>
				    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
				    <a class="navbar-brand" href="<?php echo base_url() ?>"><?php echo SHOP_NAME ?></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <ul class="nav navbar-nav">
						<li>
						    <a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li>
						    <a href="<?php echo base_url() . 'about' ?>">About</a>
						</li>
						<li>
						    <a href="<?php echo base_url() . 'resi' ?>">Resi</a>
						</li>
						<li class="menu-product">
						    <a href="#">Product <span class="caret"></span></a>
						    <ul class="dropdown-menu">
								<li>
									<a href="#">Cardigan</a>
								</li>
								<li>
									<a href="#">Kemeja</a>
								</li>
								<li>
									<a href="#">Jaket</a>
								</li>
								<li>
									<a href="#">Sweater</a>
								</li>
								<li>
									<a href="#">Cosplay</a>
								</li>
						    </ul>
						</li>
						<li>
						    <a href="<?php echo base_url() . 'testimoni' ?>">Testimoni</a>
						</li>
						<li>
						    <a href="<?php echo base_url() . 'contact' ?>">Kontak</a>
						</li>
						<li>
						    <a href="#">Reseller</a>
						</li>
				    </ul>
				</div>
			</div>
				<!-- /.navbar-collapse -->
		</div>	
    </div>
    <!-- /.container -->
</nav>
