<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="wpsm_row"> 
<style>
.wpsm_row{
	overflow:hidden;
	display:block;
	width:100%;
}
.wpsm_service_b_row{ 
	overflow:hidden;
	display:block;
	width:100%;
	border:0px solid #ddd;
	margin-bottom:20px;
}
 #wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox{
	padding:30px 0 ;
	margin-bottom:20px;
}
#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox .wpsm_service-icon{
	background:<?php echo esc_attr($service_icon_bg_clr); ?> !important;
	height: 70px;
	width: 70px;
	border-radius:50% !important;
	text-align: center !important;
	float: left !important;
}

#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox .wpsm_service-icon i{
	font-size:30px !important;
	color: <?php echo esc_attr($service_icon_clr); ?> !important;
	line-height: 70px;
}
<?php if($service_display_icon=="yes"){ ?>   
#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox .wpsm_service-content {
	margin-left: 95px;
}
<?php } ?>
#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox .wpsm_service-content h3{
	color: <?php echo esc_attr($service_title_clr); ?> !important;
	font-size: <?php echo esc_attr($service_title_font_size); ?>px !important;
	font-weight: 600;
	<?php if($font_family !="0"){ ?>
	font-family:'<?php echo esc_attr($font_family); ?>' !important;
	<?php } ?>
	margin-top: 0;
	clear:inherit !important;
	line-height:1.4 !important;
	margin-bottom:0px !important;
	
}
#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox .wpsm_service-content p{
	color:<?php echo esc_attr($service_des_clr); ?> !important;
	font-size: <?php echo esc_attr($service_des_font_size); ?>px !important;
	line-height:1.4 !important;
	<?php if($font_family !="0"){ ?>
	font-family:'<?php echo esc_attr($font_family); ?>' !important;
	<?php } ?>
	margin-top:10px;
	margin-bottom:0px;
	
}
#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .wpsm_serviceBox .wpsm_read{
	color: <?php echo esc_attr($service_readmore_clr); ?> !important;
	font-size: <?php echo esc_attr($service_readmore_font_size); ?>px !important;
	<?php if($font_family !="0"){ ?>
	font-family:'<?php echo esc_attr($font_family); ?>' !important;
	<?php } ?>
	text-decoration: none;
	border-bottom: 1px solid;
	margin-top:15px;
	display: inline-block;
}

#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .owl-dots{
	<?php if($service_display_cal_dots=='no'){?>
		display: none;
	<?php } else {?>
		display: block;
	<?php } ?>
}
#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .owl-dots span
{
	background:<?php echo esc_attr($service_cal_dot_bg_clr);?>;
}

#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .owl-dot.active span{
		background:<?php echo esc_attr($service_cal_dot_hover_bg_clr);?>;
}

#wpsm_service_b_row_<?php echo esc_attr($post_id); ?> .owl-dot:hover span{
		background:<?php echo esc_attr($service_cal_dot_hover_bg_clr);?>;
}
<?php echo esc_attr($custom_css); ?>
</style>
<div id="wpsm-carousel-<?php echo esc_attr($post_id); ?>" class="wpsm-service-owl-carousel">

			<?php
			$i=1;
			
			switch($sb_layout){
					case(6):
						$row=2;
					break;
					case(4):
						$row=3;
					break;
					case(3):
						$row=4;
					break;
				}
					foreach($data as $single_data)
					{
						 $service_title = $single_data['service_title'];
						 $service_description = $single_data['service_description'];
						 $service_icon = $single_data['service_icon'];
						 $service_link = $single_data['service_link'];
						?>

				
                    <div class="wpsm_serviceBox">
						<?php if($service_display_icon=="yes"){ ?>                       
							<div class="wpsm_service-icon">
								<i class="fa <?php echo esc_attr($service_icon); ?>"></i>
							</div>
						<?php } ?>
                        <div class="wpsm_service-content">
                            <h3><?php echo esc_html($service_title); ?></h3>
                            <p> <?php echo $service_description; ?></p>
                            <?php if($service_display_readmore=="yes"){ ?>
							<?php if($service_link !="") { ?>	
							<a target="_blank" href="<?php echo esc_url($service_link); ?>" class="wpsm_read"><?php echo esc_html($sb_web_link_label); ?>              
                            </a>
							<?php } } ?>
                        </div>
                    </div>
				<?php
       } 
    ?>
    </div>    
</div>	
<script>
jQuery(document).ready(function() {
	  
	  var PostId = '<?php echo $post_id; ?>';
	  PostId = '#wpsm-carousel-'+PostId;
	  var owl = jQuery(PostId);
	  owl.owlCarousel({
		responsiveClass:true,
		
		loop: true,
		margin: 20,				
		autoplay: true,
		rewindNav : false,
		autoplayTimeout: 5000,
		
        autoplaySpeed: 500,				
		autoplayHoverPause: true,		
		responsive: {
		  0: {
			items: 1
		  },
		  500: {
			items: 2
		  },
		  767: {
			items: 2
		  },
		  992: {
			items: 3
		  },
		  1000: {
			items:<?php echo esc_attr($row);?>
		  }
		}
	  });
	  
})
</script>   