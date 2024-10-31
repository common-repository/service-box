<?php

$this->start_controls_section(
			'design_section',
			[
				'label' => __( 'Design', 'Service Box' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'service_box_select_design',
			[
				'label' => __( 'Select Design', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Design 1', 'wpshopmart_service_box_text_domain' ),
					'2' => __( 'Design 2', 'wpshopmart_service_box_text_domain' ),
					'3'  => __( 'Design 1 + Carousel', 'wpshopmart_service_box_text_domain' ),
					'4' => __( 'Design 2 + Carousel', 'wpshopmart_service_box_text_domain' ),
				],
			]
		);
$this->end_controls_section();


$this->start_controls_section(
	'content_section',
	[
		'label' => __( 'Content', 'Service Box' ),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'service_title',
			[
				'label' => __( 'Service Title', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Sample Title', 'wpshopmart_service_box_text_domain' ),
				'placeholder' => __( 'Enter Service title Here', 'wpshopmart_service_box_text_domain' ),
			]
		);

		$repeater->add_control(
			'service_description',
			[
				'label' => __( 'Service Small Description', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => __( 'Description', 'wpshopmart_service_box_text_domain' ),
				'placeholder' => __( 'Enter your service description here', 'wpshopmart_service_box_text_domain' ),
			]
		);

		$repeater->add_control(
			'service_icon',
			[
				'label' => __( 'Service Icon', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-laptop',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'service_link',
			[
				'label' => __( 'Add Your Service Link Or Read More Link Here(With http:// or https://)', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Enter Service Link Here', 'wpshopmart_service_box_text_domain' ),
				'show_external' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->add_control(
			'service_box_list',
			[
				'label' => __( 'Repeater List', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'service_title' => __( 'Service Title', 'wpshopmart_service_box_text_domain' ),
						'service_description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat.', 'wpshopmart_service_box_text_domain' ),
						'service_icon' => __( 'fa fa-laptop', 'wpshopmart_service_box_text_domain' ),
						'service_link' => __( '#', 'wpshopmart_service_box_text_domain' ),
						
					],
					[
						'service_title' => __( 'Service Title', 'wpshopmart_service_box_text_domain' ),
						'service_description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat.', 'wpshopmart_service_box_text_domain' ),
						'service_icon' => __( 'fa fa-laptop', 'wpshopmart_service_box_text_domain' ),
						'service_link' => __( '#', 'wpshopmart_service_box_text_domain' ),
					],
					
				],
				'title_field' => '{{{ service_title }}}',
			]
		);

$this->end_controls_section();
$this->start_controls_section(
		'service_style_section',
			[
				'label' => __( 'Style', 'Service Box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'show_service_icon',
			[
				'label' => __( 'Display Icon', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', 'Service Box' ),
				'label_off' => __( 'No', 'Service Box' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_service_read_more',
			[
				'label' => __( 'Display Read More Button', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', 'Service Box' ),
				'label_off' => __( 'No', 'Service Box' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'service_title_color',
			[
				'label' => __( 'Service Title Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-content h3' => 'color: {{VALUE}}',
					'{{WRAPPER}}' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'service_icon_color',
			[
				'label' => __( 'Service Icon Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'show_service_icon' => 'yes',
				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#636363',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-icon2 i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'service_icon_bg_color',
			[
				'label' => __( 'Service Icon Background Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'show_service_icon' => 'yes',
				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#dddddd',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-icon' => 'background: {{VALUE}}',
					'{{WRAPPER}}' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'service_description_color',
			[
				'label' => __( 'Service Description Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#7f7f7f',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-content p' => 'color: {{VALUE}}',
					'{{WRAPPER}}' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'service_read_more_link_color',
			[
				'label' => __( 'Read More Link Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'show_service_read_more' => 'yes',
				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#4c4c4c',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_read' => 'color: {{VALUE}}',
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_read_more' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'service_read_more_link_bg_color',
			[
				'label' => __( 'Read More Link Background Color Design-2', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'show_service_read_more' => 'yes',
					
					

				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_read_more' => 'background: {{VALUE}}',

					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_read_more ' => 'border-color: {{VALUE}}',
					
				],
			]
		);
		$this->add_control(
			'service_box_design_2_bg_color',
			[
				'label' => __( 'Service Box Background Color for Design-2', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#e5e5e5',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .service_box_bg' => 'background: {{VALUE}}',
					'{{WRAPPER}}' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'service_title_font_size',
			[
				'label' => __( 'Title Font Size', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 30,
						'step' => 1,
					],
					
				],
				'default' => [
					'unit' => 'px',
					'size' => 22,
				],
				'selectors' => [
					'{{WRAPPER}}  #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-content h3' => 'font-size: {{SIZE}}{{UNIT}};',
					
					'{{WRAPPER}}' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'service_description_font_size',
			[
				'label' => __( 'Service Description Font Size', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 30,
						'step' => 1,
					],
					
				],
				'default' => [
					'unit' => 'px',
					'size' => 19,
				],
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-content p' => 'font-size: {{SIZE}}{{UNIT}};',
					
					'{{WRAPPER}}' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'service_read_more_link_font_size',
			[
				'label' => __( 'Read More Link Text Size', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'show_service_read_more' => 'yes',
				],
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 30,
						'step' => 1,
					],
					
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_read' => 'font-size: {{SIZE}}{{UNIT}};',
					
					'{{WRAPPER}}' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'service_font_family',
			[
				'label' => __( 'Font Style/Family', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "Open Sans",
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-content h3' => 'font-family: {{VALUE}};',
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_service-content p' => 'font-family: {{VALUE}};',
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .wpsm_read' => 'font-family: {{VALUE}};',
					'{{WRAPPER}}' => 'font-family: {{VALUE}};',
					'{{WRAPPER}}' => 'font-family: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'service_select_column',
			[
				'label' => __( 'Service Box Column Display layout
', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '6',
				'options' => [
					'6'  => __( '2 Column Layout', 'wpshopmart_service_box_text_domain' ),
					'4' => __( '3 Column Layout', 'wpshopmart_service_box_text_domain' ),
					'3' => __( '4 Column Layout', 'wpshopmart_service_box_text_domain' ),
				],
			]
		);
		$this->add_control(
			'service_read_more_label',
			[
				'label' => __( 'Service Box Read More Link Label', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'condition' => [
					'show_service_read_more' => 'yes',
				],
				'default' => __( 'Read More', 'wpshopmart_service_box_text_domain' ),
			]
		);
		$this->add_control(
			'show_service_cal_dots',
			[
				'label' => __( 'Display Carousel Dots', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', 'Service Box' ),
				'label_off' => __( 'No', 'Service Box' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'service_carousel_dots_background_color',
			[
				'label' => __( 'Carousel Dots Background Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'show_service_cal_dots' => 'yes',
				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#d6d6d6',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .owl-dots span' => 'background: {{VALUE}}',

					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .wpsm_serviceBox .owl-dots span' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'service_carousel_dots_hover_background_color',
			[
				'label' => __( 'Carousel Dots Hover/Active Background Color', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'show_service_cal_dots' => 'yes',
				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#939393',
				'selectors' => [
					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .owl-dot.active span' => 'background: {{VALUE}}',

					'{{WRAPPER}} #wpsm_service_b_row_'.get_the_ID().' .owl-dot:hover span' => 'background: {{VALUE}}',
				],
			]
		);

$this->end_controls_section();
$this->start_controls_section(
			'code_section',
			[
				'label' => __( 'Code', 'Service Box' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'custom_css',
			[
				'label' => __( 'Custom Css', 'wpshopmart_service_box_text_domain' ),
				'type' => \Elementor\Controls_Manager::CODE,
				'language' => 'css',
				'description' =>'Enter Css without using style tag',
				'rows' => 20,
			]
		);
$this->end_controls_section();