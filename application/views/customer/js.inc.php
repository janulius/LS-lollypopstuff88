<!-- jQuery -->
<script src="<?php echo ASSETS . 'js/jquery.js' ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ASSETS . 'js/bootstrap.min.js' ?>"></script>
<script src="assets/js/jquery.bxslider.js"></script>
<script type="text/javascript">
	$('.frontSlider').bxSlider({
	    mode: 'horizontal',
	    controls: true,
	    auto: true,
	    autoHover:true,
	    responsive: true,
	 });
	$(window).resize(function(event) {
		$(document).scroll(function(event) {
			var scrollTop = $(document).scrollTop();
			if(scrollTop > 50){
				$('.navbar-default').css("position","fixed");	
			}else{
				$('.navbar-default').css("position","relative");
			}
		});
	});
	$(document).scroll(function(event) {
		var scrollTop = $(document).scrollTop();
		if(scrollTop > 50){
			$('.navbar-default').css("position","fixed");	
		}else{
			$('.navbar-default').css("position","relative");
		}
	});
	$('ul li.menu-product').hover(function() {
		$('ul.dropdown-menu').css("display","block");
	}, function() {
		$('ul.dropdown-menu').css("display","none");
	});
</script>
<!-- Disable JavaScript -->
<!--<script src="<?php echo ASSETS . 'js/disable.js' ?>"></script>-->