<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php $post_id=get_the_ID(); ?>
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
 #wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox{
	padding:30px 0 ;
	margin-bottom:20px;
}
#wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-icon{
	
	height: 70px;
	width: 70px;
	border-radius:50% !important;
	text-align: center !important;
	float: left !important;
}

#wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-icon i{
	font-size:30px !important;
	line-height: 70px;
}
<?php if($settings['show_service_icon']=="yes"){ ?>   
#wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-content {
	margin-left: 95px;
}
<?php } ?>
#wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-content h3{
	margin-top: 0;
	font-weight: 600;
	clear:inherit !important;
	line-height:1.4 !important;
	margin-bottom:0px !important;
	
}
#wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-content p{
	line-height:1.4 !important;
	margin-top:10px;
	margin-bottom:0px;
	
}
#wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_read{
	text-decoration: none;
	border-bottom: 1px solid;
	margin-top:15px;
	display: inline-block;
}
<?php echo $settings['custom_css']; ?>
</style>
<div class="wpsm_service_b_row" id="wpsm_service_b_row_<?php echo $post_id; ?>">
	<div class="wpsm_row"> 

			<?php
			$i=1;
			
			switch($settings['service_select_column'] ){
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
			if ( $settings['service_box_list'] ) {
		foreach (  $settings['service_box_list'] as $index => $item ) {
			$service_title_setting_key=$this->get_repeater_setting_key('service_title','service_box_list',$index);
			$this->add_inline_editing_attributes( $service_title_setting_key,'basic' );

			$service_description_setting_key=$this->get_repeater_setting_key('service_description','service_box_list',$index);
			$this->add_inline_editing_attributes( $service_description_setting_key,'basic' );
					
					?>
				<div class="wpsm_col-md-<?php echo $settings['service_select_column']; ?>  wpsm_col-sm-6">
                    <div class="wpsm_serviceBox">
						<?php if($settings['show_service_icon']=="yes"){ ?>                       
							<div class="wpsm_service-icon">
								<?php \Elementor\Icons_Manager::render_icon( $item['service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
							</div>
						<?php } ?>
                        <div class="wpsm_service-content">
                            <h3 <?php echo $this->get_render_attribute_string($service_title_setting_key); ?>><?php echo $item['service_title']; ?></h3>
                            <p <?php echo $this->get_render_attribute_string($service_description_setting_key); ?>><?php  echo do_shortcode($item['service_description']); ?></p>
                            <?php if($settings['show_service_read_more']=="yes"){ ?>
							<?php if($settings['service_read_more_label'] !="") { ?>	
							<a target="_blank" href="<?php echo $item['service_link']['url']; ?>" class="wpsm_read"><?php echo $settings['service_read_more_label']; ?>
                                
                            </a>
							<?php } } ?>
                        </div>
                    </div>
                </div>

				<?php
					if($i%$row==0){
						?>
						</div>
						<div class="wpsm_row">
						<?php 
					}	
					
					 $i++;
       } 
   }
    ?>    

	</div>
</div>	   