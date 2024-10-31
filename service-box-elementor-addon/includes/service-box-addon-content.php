<#
if(settings.service_box_select_design=='1'){
  var post_id='<?php echo get_the_ID();?>'; #>
<div class="wpsm_service_b_row" id="wpsm_service_b_row_{{ post_id }}">
	<div class="wpsm_row">  
<style>
{{settings.custom_css}}
</style>
<#
	var i=1;
	var row=0;		
	switch(settings.service_select_column){
			case(6):
				row=2;
			break;
			case(4):
				row=3;
			break;
			case(3):
				row=4;
			break;
		}
	if ( settings.service_box_list.length ) {
	<# _.each(settings.service_box_list,function(item,index){ 

		service_title_setting_key=view.getRepeaterSettingKey( 'service_title', 'service_box_list', index );
		view.addInlineEditingAttributes( service_title_setting_key, 'none' );

		service_description_setting_key=view.getRepeaterSettingKey( 'service_description', 'service_box_list', index );
		view.addInlineEditingAttributes( service_description_setting_key, 'none' );
	#>
			<div class="wpsm_col-md-{{settings.service_select_column}}  wpsm_col-sm-6">
			    <div class="wpsm_serviceBox">
					<# if(settings.show_service_icon=="yes"){ #>                       
						<div class="wpsm_service-icon">
							{{{ service_iconHTML.value }}}
						</div>
					<# } #>
			        <div class="wpsm_service-content">
			            <h3 {{{ view.getRenderAttributeString( service_title_setting_key ) }}}>{{item.service_title}}</h3>
			            <p {{{ view.getRenderAttributeString( service_description_setting_key ) }}}>{{item.service_description}}</p>
			            <# if(settings.show_service_read_more=="yes"){ #>
						<# if(settings.service_read_more_label !="") { #>	
						<a target="_blank" href="{{item.service_link}}" class="wpsm_read">{{settings.service_read_more_label}}   
			            </a>
						<# } } #>
			        </div>
			    </div>
			</div>
			<#
					if(i%$row==0){
						#>
						</div>
						<div class="wpsm_row">
						<# 
					}	
					
					 #i++;
		}
	}
#>	
	</div>
</div>
<#
} else if(settings.service_box_select_design=='2'){
	var post_id='<?php echo get_the_ID();?>'; #>
	<div class="wpsm_service_b_row" id="wpsm_service_b_row_{{ post_id }}">
		<div class="wpsm_row">  
	<style>
	{{settings.custom_css}}
	</style>
	<#
	var i=1;
	var row=0;		
	switch(settings.service_select_column){
			case(6):
				row=2;
			break;
			case(4):
				row=3;
			break;
			case(3):
				row=4;
			break;
		}
	if ( settings.service_box_list.length ) {
	<# _.each(settings.service_box_list,function(item,index){ 

		service_title_setting_key=view.getRepeaterSettingKey( 'service_title', 'service_box_list', index );
		view.addInlineEditingAttributes( service_title_setting_key, 'none' );

		service_description_setting_key=view.getRepeaterSettingKey( 'service_description', 'service_box_list', index );
		view.addInlineEditingAttributes( service_description_setting_key, 'none' );
	#>
		<div class="wpsm_col-md-{{settings.service_select_column}} wpsm_col-sm-6">
			<div class="wpsm_serviceBox service_box_bg">
				<# if(settings.show_service_icon=="yes"){ #> 
					<div class="wpsm_service-icon2">
						{{{ service_iconHTML.value }}}
					</div>
				<# } #>
				<data></data><div class="wpsm_service-content">
					<h3 {{{ view.getRenderAttributeString( service_title_setting_key ) }}}>{{item.service_title}}</h3>
					<p {{{ view.getRenderAttributeString( service_description_setting_key ) }}}>
						{{item.service_description}}
					</p>
				</div>
				<# if(settings.show_service_read_more=="yes"){ #>
					<# if(settings.service_read_more_label !="") { #>
						<a href="{{item.service_link}}" class="btn btn-default wpsm_read_more" target="_blank">{{settings.service_read_more_label}}</a>
				<# } } #>
			</div>
		</div>
		<#
				if(i%$row==0){
					#>
					</div>
					<div class="wpsm_row">
					<# 
				}	
				
				#i++;
			}
		}
		#>	
		</div>
	</div>
} else if(settings.service_box_select_design=='3'){
	
		var post_id='<?php echo get_the_ID();?>'; #>
	#>
	<div class="wpsm_service_b_row" id="wpsm_service_b_row_{{ post_id }}">
		<div class="wpsm_row">  
		<style>
		{{settings.custom_css}}
		</style>
			<div class="owl-carousel">
	<#
	var i=1;
	var row=0;		
	switch(settings.service_select_column){
			case(6):
				row=2;
			break;
			case(4):
				row=3;
			break;
			case(3):
				row=4;
			break;
		}

	if ( settings.service_box_list.length ) {
	<# _.each(settings.service_box_list,function(item,index){ 

		service_title_setting_key=view.getRepeaterSettingKey( 'service_title', 'service_box_list', index );
		view.addInlineEditingAttributes( service_title_setting_key, 'none' );

		service_description_setting_key=view.getRepeaterSettingKey( 'service_description', 'service_box_list', index );
		view.addInlineEditingAttributes( service_description_setting_key, 'none' );
	#>
		<div class="wpsm_serviceBox">
			<# if(settings.show_service_icon=="yes"){ #>                       
				<div class="wpsm_service-icon">
					{{{ service_iconHTML.value }}}
				</div>
			<# } #>
	        <div class="wpsm_service-content">
	            <h3 {{{ view.getRenderAttributeString( service_title_setting_key ) }}}>{{item.service_title}}</h3>
	            <p {{{ view.getRenderAttributeString( service_description_setting_key ) }}}>{{item.service_description}}</p>
	            <# if(settings.show_service_read_more=="yes"){ #>
				<# if(settings.service_read_more_label !="") { #>	
				<a target="_blank" href="{{item.service_link}}" class="wpsm_read">{{settings.service_read_more_label}}   
	            </a>
				<# } } #>
	        </div>
	    </div>

	<#
		}
	}
	#>
		</div>
	</div>
</div>
<# 
}  else if(settings.service_box_select_design=='4'){
	
	var post_id='<?php echo get_the_ID();?>'; #>
	#>
	<div class="wpsm_service_b_row" id="wpsm_service_b_row_{{ post_id }}">
		<div class="wpsm_row">  
		<style>
		{{settings.custom_css}}
		</style>
			<div class="owl-carousel">
	<#
	var i=1;
	var row=0;		
	switch(settings.service_select_column){
			case(6):
				row=2;
			break;
			case(4):
				row=3;
			break;
			case(3):
				row=4;
			break;
		}

	if ( settings.service_box_list.length ) {
	<# _.each(settings.service_box_list,function(item,index){ 

		service_title_setting_key=view.getRepeaterSettingKey( 'service_title', 'service_box_list', index );
		view.addInlineEditingAttributes( service_title_setting_key, 'none' );

		service_description_setting_key=view.getRepeaterSettingKey( 'service_description', 'service_box_list', index );
		view.addInlineEditingAttributes( service_description_setting_key, 'none' );
	#>
		<div class="wpsm_col-md-{{settings.service_select_column}} wpsm_col-sm-6">
			<div class="wpsm_serviceBox service_box_bg">
				<# if(settings.show_service_icon=="yes"){ #> 
					<div class="wpsm_service-icon2">
						{{{ service_iconHTML.value }}}
					</div>
				<# } #>
				<data></data><div class="wpsm_service-content">
					<h3 {{{ view.getRenderAttributeString( service_title_setting_key ) }}}>{{item.service_title}}</h3>
					<p {{{ view.getRenderAttributeString( service_description_setting_key ) }}}>
						{{item.service_description}}
					</p>
				</div>
				<# if(settings.show_service_read_more=="yes"){ #>
					<# if(settings.service_read_more_label !="") { #>
						<a href="{{item.service_link}}" class="btn btn-default wpsm_read_more" target="_blank">{{settings.service_read_more_label}}</a>
				<# } } #>
			</div>
		</div>

	<#
		}
	}
	#>
		</div>
	</div>
</div>
<#
}
#>