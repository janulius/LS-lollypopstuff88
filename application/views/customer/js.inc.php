<!-- jQuery -->
<script src="<?php echo ASSETS . 'js/jquery.js' ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ASSETS . 'js/bootstrap.min.js' ?>"></script>
<script src="<?php echo ASSETS . 'js/jquery.bxslider.js' ?>"></script>
<script type="text/javascript">
	//untuk slideshow
	$('.frontSlider').bxSlider({
	    mode: 'horizontal',
	    controls: true,
	    auto: true,
	    autoHover:true,
	    responsive: true,
	 });
	//untuk nav
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
	//untuk panjang max 30
	$("#content").find(".prodDesc p").each(function(){
        var nameProd = $(this).text();
        $(this).attr("title",nameProd);
        if(nameProd.length>30) {
            var nameSlice = nameProd.slice(0,30) + "...";
        }
        $(this).text(nameSlice);
    });

    $(document).on('click', 'a.view', function(event) {
    	event.preventDefault();
    	 if($(this).hasClass('grid')) {   
            $('.prodWrap').animate({opacity:0}, function(){
                $('div.prodList-12').removeClass('col-lg-12').removeClass('prodList-12').addClass('col-lg-3').addClass('prodList-3');
                $(this).animate({opacity:1});
            });
        }else if($(this).hasClass('list')){
            $('.prodWrap').animate({opacity:0}, function(){
                $('div.prodList-3').removeClass('col-lg-3').removeClass('prodList-3').addClass('col-lg-12').addClass('prodList-12');
                $(this).animate({opacity:1});
            });
        }
    });
    
</script>
<!-- Disable JavaScript -->
<!--<script src="<?php echo ASSETS . 'js/disable.js' ?>"></script>-->