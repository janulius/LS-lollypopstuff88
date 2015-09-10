<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="<?php echo 'home' ?>"><?php echo 'Welcome to ' . SHOP_NAME . ' - ' . $username ?></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
	<li><a href="<?php echo base_url() . ADMIN_URL . '/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
	    <ul class="nav" id="side-menu">
		<li>
		    <a class="<?php echo $tab_active == 'HOME' ? 'active' : '' ?>" href="<?php echo base_url() . ADMIN_URL . '/home' ?>"><i class="fa fa-file-picture-o fa-fw"></i> Slideshow</a>
		</li>

		<li>
		    <a class="<?php echo $tab_active == 'PRODUCT' ? 'active' : '' ?>" href="<?php echo base_url() . ADMIN_URL . '/product' ?>"><i class="fa fa-chain fa-fw"></i> Product</a>
		</li>

		<li>
		    <a class="<?php echo $tab_active == 'RESI' ? 'active' : '' ?>" href="<?php echo base_url() . ADMIN_URL . '/resi' ?>"><i class="fa fa-paper-plane fa-fw"></i> Resi</a>
		</li>

		<li>
		    <a class="<?php echo $tab_active == 'TESTIMONI' ? 'active' : '' ?>" href="<?php echo base_url() . ADMIN_URL . '/testimoni' ?>"><i class="fa fa-comment fa-fw"></i> Testimoni</a>
		</li>
	    </ul>
	</div>
	<!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>