  <div class="slick-image-slide">  
	<?php
	$sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );
	echo ($sliderurl !='' ? '<a href="'.$sliderurl.'">' : '');
	if($sliderimage_size == '' || $sliderimage_size == 'large')  { 
			 the_post_thumbnail('full'); 			 
		} elseif ($sliderimage_size == 'large') {			
			the_post_thumbnail('large'); 
		} elseif ( $sliderimage_size == 'large') {
			the_post_thumbnail('url'); 
		} elseif ( $sliderimage_size == 'large') {
			the_post_thumbnail('large'); 
		}  else {
			 the_post_thumbnail('full'); 			
		}
	echo ($sliderurl !='' ? '</a>' : '');
 ?>
</div>