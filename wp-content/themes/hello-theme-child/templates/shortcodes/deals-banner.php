<?php

$checkout_banner_text = get_field('checkout_banner_text','option');
?>

<div class="page-banner">
		<div class="page-banner-slider">
			<?php if( have_rows('checkout_banner_images','option') ):
					while( have_rows('checkout_banner_images','option') ) : the_row(); 
						$banner_image = get_sub_field('banner_image'); 
						?>
					<?php if(isset($banner_image) && !empty($banner_image)){?>
						<div class="slider-img">
							<img src="<?php echo esc_url($banner_image['url']); ?>">
						</div>
					<?php }?>
				<?php 
				endwhile;
			endif;
			?>
		</div>
		<?php if(!empty($checkout_banner_text)){?>
			<h1 class="page-main-title"><?php echo esc_html($checkout_banner_text,'hello-elementor-child'); ?></h1>
		<?php }?>
	</div>