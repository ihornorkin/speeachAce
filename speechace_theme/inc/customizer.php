<?php

function theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$total_pages = get_pages(array('hide_empty' => 0));
	foreach ($total_pages as $total_pages_single) {
		$total_page_choice[$total_pages_single->ID] = $total_pages_single->post_title; 
	}

	/*============HOME PANEL============*/
	$wp_customize->add_panel(
		'home_panel',
		array(
			'title' => __( 'Home Sections' ),
			'priority' => 20
		)
	);

	/*============TOP SECTION============*/
	$wp_customize->add_section(
		'top_section',
		array(
			'title'			=> __( 'Top Section' ),
			'panel'         => 'home_panel',
			'priority'		=> '0'
		)
	);

		$wp_customize->add_setting(
			'top_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'top_disable',
				array(
					'settings'		=> 'top_disable',
					'section'		=> 'top_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);		

		$wp_customize->add_setting(
				'sec_logo',
				array(
					'sanitize_callback' => 'esc_url_raw'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			    $wp_customize,
			    'sec_logo',
			    array(
			            'section' => 'top_section',
			            'settings' => 'sec_logo',
			            'description' => __('Secondary logo')
			    )
			)
		);

		$wp_customize->add_setting(
			'top_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'top_title',
			array(
				'settings'		=> 'top_title',
				'section'		=> 'top_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'top_subtitle',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'top_subtitle',
			array(
				'settings'		=> 'top_subtitle',
				'section'		=> 'top_section',
				'type'			=> 'text',
				'label'			=> __( 'Subtitle' )
			)
		);

		$wp_customize->add_setting(
				'top_image',
				array(
					'sanitize_callback' => 'esc_url_raw'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			    $wp_customize,
			    'top_image',
			    array(
			            'section' => 'top_section',
			            'settings' => 'top_image',
			            'description' => __('Top image')
			    )
			)
		);

		$wp_customize->add_setting(
			'top_buttons',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);			

		$wp_customize->add_control(
			new Customize_Heading(
				$wp_customize,
				'top_buttons',
				array(
					'settings'		=> 'top_buttons',
					'section'		=> 'top_section',
					'label'			=> __( 'Buttons ' )
				)
			)
		);

		$wp_customize->add_setting(
			'top_btn1',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'top_btn1',
			array(
				'settings'		=> 'top_btn1',
				'section'		=> 'top_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 1 Text' )
			)
		);

		$wp_customize->add_setting(
			'top_btn1_url',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'top_btn1_url',
			array(
				'settings'		=> 'top_btn1_url',
				'section'		=> 'top_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 1 Link' )
			)
		);				

		$wp_customize->add_setting(
			'top_btn2',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'top_btn2',
			array(
				'settings'		=> 'top_btn2',
				'section'		=> 'top_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 2 Text' )
			)
		);

		$wp_customize->add_setting(
			'top_btn2_url',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'top_btn2_url',
			array(
				'settings'		=> 'top_btn2_url',
				'section'		=> 'top_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 2 Link' )
			)
		);	

		/*============ WHAT WE DO ============*/
		$wwd_order = get_theme_mod('wwd_order');

		$wp_customize->add_section(
			'wwd_section',
			array(
				'title'			=> __( 'What We Do ' ),
				'panel'         => 'home_panel',
				'priority'		=> $wwd_order
			)
		);

		$wp_customize->add_setting(
			'wwd_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'wwd_disable',
				array(
					'settings'		=> 'wwd_disable',
					'section'		=> 'wwd_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);

		$wp_customize->add_setting(
			'wwd_order',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'wwd_order',
			array(
				'settings'		=> 'wwd_order',
				'section'		=> 'wwd_section',
				'type'			=> 'text',
				'label'			=> __( 'Section order' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);				

		$wp_customize->add_setting(
			'wwd_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'wwd_title',
			array(
				'settings'		=> 'wwd_title',
				'section'		=> 'wwd_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'wwd_subtitle',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'wwd_subtitle',
			array(
				'settings'		=> 'wwd_subtitle',
				'section'		=> 'wwd_section',
				'type'			=> 'text',
				'label'			=> __( 'Subtitle' )
			)
		);

		$wp_customize->add_setting(
			'wwd_text',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'wwd_text',
			array(
				'settings'		=> 'wwd_text',
				'section'		=> 'wwd_section',
				'type'			=> 'textarea',
				'label'			=> __( 'Text' )
			)
		);

		$wp_customize->add_setting(
				'wwd_image',
				array(
					'sanitize_callback' => 'esc_url_raw'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			    $wp_customize,
			    'wwd_image',
			    array(
			            'section' => 'wwd_section',
			            'settings' => 'wwd_image',
			            'description' => __('Image Left')
			    )
			)
		);

		$wp_customize->add_setting(
				'wwd_image2',
				array(
					'sanitize_callback' => 'esc_url_raw'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			    $wp_customize,
			    'wwd_image2',
			    array(
			            'section' => 'wwd_section',
			            'settings' => 'wwd_image2',
			            'description' => __('Image Right')
			    )
			)
		);		

		/*============ SPEECHACE API ============*/
		$sa_order = get_theme_mod('sa_order');

		$wp_customize->add_section(
			'sa_section',
			array(
				'title'			=> __( ' SpeechAce API ' ),
				'panel'         => 'home_panel',
				'priority'		=> $sa_order
			)
		);

		$wp_customize->add_setting(
			'sa_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'sa_disable',
				array(
					'settings'		=> 'sa_disable',
					'section'		=> 'sa_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);

		$wp_customize->add_setting(
			'sa_order',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'sa_order',
			array(
				'settings'		=> 'sa_order',
				'section'		=> 'sa_section',
				'type'			=> 'text',
				'label'			=> __( 'Section order' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);				

		$wp_customize->add_setting(
			'sa_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'sa_title',
			array(
				'settings'		=> 'sa_title',
				'section'		=> 'sa_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'sa_subtitle',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'sa_subtitle',
			array(
				'settings'		=> 'sa_subtitle',
				'section'		=> 'sa_section',
				'type'			=> 'text',
				'label'			=> __( 'Subtitle' )
			)
		);

		$wp_customize->add_setting(
			'sa_contact',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'sa_contact',
			array(
				'settings'		=> 'sa_contact',
				'section'		=> 'sa_section',
				'type'			=> 'text',
				'label'			=> __( 'Contact form [SHORTCODE]' )
			)
		);		

		$wp_customize->add_setting(
			'sa_text',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'sa_text',
			array(
				'settings'		=> 'sa_text',
				'section'		=> 'sa_section',
				'type'			=> 'textarea',
				'label'			=> __( 'Text' )
			)
		);

		for( $i = 1; $i < 6; $i++ ){
			$wp_customize->add_setting(
					'sa_image'.$i,
					array(
						'sanitize_callback' => 'esc_url_raw'
					)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
				    $wp_customize,
				    'sa_image'.$i,
				    array(
				            'section' => 'sa_section',
				            'settings' => 'sa_image'.$i,
				            'description' => __('Image'.$i)
				    )
				)
			);
		}


	/*============ APPS ============*/
		$apps_order = get_theme_mod('apps_order');

		$wp_customize->add_section(
			'apps_section',
			array(
				'title'			=> __( ' APPS ' ),
				'panel'         => 'home_panel',
				'priority'		=> $apps_order
			)
		);

		$wp_customize->add_setting(
			'apps_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'apps_disable',
				array(
					'settings'		=> 'apps_disable',
					'section'		=> 'apps_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);

		$wp_customize->add_setting(
			'apps_order',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_order',
			array(
				'settings'		=> 'apps_order',
				'section'		=> 'apps_section',
				'type'			=> 'text',
				'label'			=> __( 'Section order' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);					

		$wp_customize->add_setting(
			'apps_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_title',
			array(
				'settings'		=> 'apps_title',
				'section'		=> 'apps_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'apps_slides',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_slides',
			array(
				'settings'		=> 'apps_slides',
				'section'		=> 'apps_section',
				'type'			=> 'text',
				'label'			=> __( 'Caruosel images count' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);		

		$apps_slides = get_theme_mod('apps_slides');

		for($i=1; $i<$apps_slides+1; $i++){

		$wp_customize->add_setting(
			'apps_heading'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);			

		$wp_customize->add_control(
			new Customize_Heading(
				$wp_customize,
				'apps_heading'.$i,
				array(
					'settings'		=> 'apps_heading'.$i,
					'section'		=> 'apps_section',
					'label'			=> __( 'Slide '.$i )
				)
			)
		);			

		$wp_customize->add_setting(
			'apps_slide'.$i,
			array(
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			$wp_customize,
				'apps_slide'.$i,
				array(
				    'section' => 'apps_section',
				    'settings' => 'apps_slide'.$i,
				    'description' => __('Slide '.$i)
				)
			)
		);

		$wp_customize->add_setting(
			'apps_slide_text'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_slide_text'.$i,
			array(
				'settings'		=> 'apps_slide_text'.$i,
				'section'		=> 'apps_section',
				'type'			=> 'text',
				'label'			=> __( 'Slide Text' ),
			)
		);

		$wp_customize->add_setting(
					'apps_download'.$i,
					array(
						'sanitize_callback' => 'esc_url_raw'
					)
		);

		$wp_customize->add_control(
				new WP_Customize_Image_Control(
				    $wp_customize,
				    'apps_download'.$i,
				    array(
				        'section' => 'apps_section',
				        'settings' => 'apps_download'.$i,
				        'description' => __('Download Image')
				    )
				)
		);

		$wp_customize->add_setting(
			'apps_download_link'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_download_link'.$i,
			array(
				'settings'		=> 'apps_download_link'.$i,
				'section'		=> 'apps_section',
				'type'			=> 'text',
				'label'			=> __( 'Download Link' )
			)
		);

		$wp_customize->add_setting(
			'apps_text'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_text'.$i,
			array(
				'settings'		=> 'apps_text'.$i,
				'section'		=> 'apps_section',
				'type'			=> 'textarea',
				'label'			=> __( 'Text' )
			)
		);	

		$wp_customize->add_setting(
			'apps_subtext'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_subtext'.$i,
			array(
				'settings'		=> 'apps_subtext'.$i,
				'section'		=> 'apps_section',
				'type'			=> 'textarea',
				'label'			=> __( 'Subtext' )
			)
		);

		$wp_customize->add_setting(
			'apps_count_lists'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_count_lists'.$i,
			array(
				'settings'		=> 'apps_count_lists'.$i,
				'section'		=> 'apps_section',
				'type'			=> 'text',
				'label'			=> __( 'Lists count' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);

		$apps_count = get_theme_mod('apps_count_lists'.$i);

		for($k=1; $k<$apps_count+1; $k++){

		$wp_customize->add_setting(
			'apps_lists'.$i.$k,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'apps_lists'.$i.$k,
			array(
				'settings'		=> 'apps_lists'.$i.$k,
				'section'		=> 'apps_section',
				'type'			=> 'textarea',
				'label'			=> __( 'List '.$k )
			)
		);						
		}									

		}



	/*============LEARNING MANAGEMENT SYSTEM============*/	

		$lms_order = get_theme_mod('lms_order');

		$wp_customize->add_section(
				'lms_section',
				array(
					'title'			=> __( ' Learning Management System ' ),
					'panel'         => 'home_panel',
					'priority'		=> $lms_order
				)
		);

		$wp_customize->add_setting(
			'lms_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'lms_disable',
				array(
					'settings'		=> 'lms_disable',
					'section'		=> 'lms_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);

		$wp_customize->add_setting(
			'lms_order',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_order',
			array(
				'settings'		=> 'lms_order',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Section order' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);				

		$wp_customize->add_setting(
			'lms_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_title',
			array(
				'settings'		=> 'lms_title',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'lms_subtitle',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_subtitle',
			array(
				'settings'		=> 'lms_subtitle',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Subtitle' )
			)
		);

		$wp_customize->add_setting(
			'lms_contact',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_contact',
			array(
				'settings'		=> 'lms_contact',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Contact form [SHORTCODE]' )
			)
		);		

		$wp_customize->add_setting(
			'lms_logos',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			new Display_Gallery_Control(
				$wp_customize,
				'lms_logos',
			array(
				'settings'		=> 'lms_logos',
				'section'		=> 'lms_section',
				'label'			=> __( 'Upload Logos' ),
			)
			)
		);

		$wp_customize->add_setting(
				'lms_video',
				array(
					'sanitize_callback' => 'sanitize_text'
				)
		);

		$wp_customize->add_control(
			'lms_video',
			array(
				'settings'		=> 'lms_video',
				'section'		=> 'lms_section',
				'type'			=> 'textarea',
				'label'			=> __( 'Embed Video' )
			)
		);

		$wp_customize->add_setting(
			'lms_list1',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_list1',
			array(
				'settings'		=> 'lms_list1',
				'section'		=> 'lms_section',
				'type'			=> 'textarea',
				'label'			=> __( 'List 1' )
			)
		);

		$wp_customize->add_setting(
			'lms_list2',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_list2',
			array(
				'settings'		=> 'lms_list2',
				'section'		=> 'lms_section',
				'type'			=> 'textarea',
				'label'			=> __( 'List 2' )
			)
		);

		$wp_customize->add_setting(
			'lms_list3',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_list3',
			array(
				'settings'		=> 'lms_list3',
				'section'		=> 'lms_section',
				'type'			=> 'textarea',
				'label'			=> __( 'List 3' )
			)
		);

		$wp_customize->add_setting(
			'lms_buttons',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);			

		$wp_customize->add_control(
			new Customize_Heading(
				$wp_customize,
				'lms_buttons',
				array(
					'settings'		=> 'lms_buttons',
					'section'		=> 'lms_section',
					'label'			=> __( 'Buttons ' )
				)
			)
		);

		$wp_customize->add_setting(
			'lms_btn1',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_btn1',
			array(
				'settings'		=> 'lms_btn1',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 1 Text' )
			)
		);

		$wp_customize->add_setting(
			'lms_btn2',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_btn2',
			array(
				'settings'		=> 'lms_btn2',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 2 Text' )
			)
		);

		$wp_customize->add_setting(
			'lms_btn2_url',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_btn2_url',
			array(
				'settings'		=> 'lms_btn2_url',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 2 Link' )
			)
		);

		$wp_customize->add_setting(
			'lms_btn3',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'lms_btn3',
			array(
				'settings'		=> 'lms_btn3',
				'section'		=> 'lms_section',
				'type'			=> 'text',
				'label'			=> __( 'Button 3 Text' )
			)
		);


	/*============Trusted and used by============*/

		$taub_order = get_theme_mod('taub_order');

		$wp_customize->add_section(
				'taub_section',
				array(
					'title'			=> __( ' Trusted And Used By ' ),
					'panel'         => 'home_panel',
					'priority'		=> $taub_order
				)
		);

		$wp_customize->add_setting(
			'taub_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'taub_disable',
				array(
					'settings'		=> 'taub_disable',
					'section'		=> 'taub_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);	

		$wp_customize->add_setting(
			'taub_order',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'taub_order',
			array(
				'settings'		=> 'taub_order',
				'section'		=> 'taub_section',
				'type'			=> 'text',
				'label'			=> __( 'Section order' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);			

		$wp_customize->add_setting(
			'taub_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'taub_title',
			array(
				'settings'		=> 'taub_title',
				'section'		=> 'taub_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'taub_logos',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			new Display_Gallery_Control(
				$wp_customize,
				'taub_logos',
			array(
				'settings'		=> 'taub_logos',
				'section'		=> 'taub_section',
				'label'			=> __( 'Upload Logos' ),
			)
			)
		);

	
	/*============OUR TEAM============*/
		$team_order = get_theme_mod('team_order');

		$wp_customize->add_section(
				'team_section',
				array(
					'title'			=> __( ' Our Team ' ),
					'panel'         => 'home_panel',
					'priority'		=> $team_order
				)
		);

		$wp_customize->add_setting(
			'team_disable',
			array(
				'sanitize_callback' => 'sanitize_text',
				'default' => 'on'
			)
		);

		$wp_customize->add_control(
			new Switch_Control(
				$wp_customize,
				'team_disable',
				array(
					'settings'		=> 'team_disable',
					'section'		=> 'team_section',
					'label'			=> __( 'Enable Section' ),
					'on_off_label' 	=> array(
						'on' => __( 'Yes' ),
						'off' => __( 'No' )
						)	
				)
			)
		);

		$wp_customize->add_setting(
			'team_order',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_order',
			array(
				'settings'		=> 'team_order',
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Section order' ),
				'description' => __('Please, save changes and refresh page after entering value')
			)
		);					

		$wp_customize->add_setting(
			'team_title',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_title',
			array(
				'settings'		=> 'team_title',
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Title' )
			)
		);

		$wp_customize->add_setting(
			'team_subtitle',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_subtitle',
			array(
				'settings'		=> 'team_subtitle',
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Subtitle' )
			)
		);

		$wp_customize->add_setting(
			'team_text',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_text',
			array(
				'settings'		=> 'team_text',
				'section'		=> 'team_section',
				'type'			=> 'textarea',
				'label'			=> __( 'Text' )
			)
		);

		$wp_customize->add_setting(
			'team_contact',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_contact',
			array(
				'settings'		=> 'team_contact',
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Contact form [SHORTCODE]' )
			)
		);		

		$wp_customize->add_setting(
			'team_count',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_count',
			array(
				'settings'		=> 'team_count',
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Team Members count' ),
				'description' 	=> __('Please, save changes and refresh page after entering value')
			)
		);

		$team_count = get_theme_mod('team_count');				

	for( $i = 1; $i < $team_count+1; $i++ ){
		$wp_customize->add_setting(
			'team_member'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);			

		$wp_customize->add_control(
			new Customize_Heading(
				$wp_customize,
				'team_member'.$i,
				array(
					'settings'		=> 'team_member'.$i,
					'section'		=> 'team_section',
					'label'			=> __( 'Team Member '.$i )
				)
			)
		);		

		$wp_customize->add_setting(
				'team_im'.$i,
				array(
					'sanitize_callback' => 'esc_url_raw'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			    $wp_customize,
			    'team_im'.$i,
			    array(
			            'section' => 'team_section',
			            'settings' => 'team_im'.$i,
			            'description' => __('Team Member Image '.$i)
			    )
			)
		);

		$wp_customize->add_setting(
			'team_name'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_name'.$i,
			array(
				'settings'		=> 'team_name'.$i,
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Name' )
			)
		);					

		$wp_customize->add_setting(
			'team_spec'.$i,
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'team_spec'.$i,
			array(
				'settings'		=> 'team_spec'.$i,
				'section'		=> 'team_section',
				'type'			=> 'text',
				'label'			=> __( 'Position' )
			)
		);
	}

	/*============FOOTER============*/

		$wp_customize->add_section(
				'footer_section',
				array(
					'title'			=> __( ' Footer ' ),
					'panel'         => 'home_panel'
				)
		);

		$wp_customize->add_setting(
				'footer_image',
				array(
					'sanitize_callback' => 'esc_url_raw'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
			    $wp_customize,
			    'footer_image',
			    array(
			            'section' => 'footer_section',
			            'settings' => 'footer_image',
			            'description' => __('Image')
			    )
			)
		);


		$wp_customize->add_setting(
			'footer_terms',
			array(
				'sanitize_callback' => 'absint'
			)
		);

		$wp_customize->add_control(
			'footer_terms',
			array(
				'settings'		=> 'footer_terms',
				'section'		=> 'footer_section',
				'type'			=> 'dropdown-pages',
				'label'			=> __( 'Terms of Service' )
			)
		);

		$wp_customize->add_setting(
			'footer_privacy',
			array(
				'sanitize_callback' => 'absint'
			)
		);

		$wp_customize->add_control(
			'footer_privacy',
			array(
				'settings'		=> 'footer_privacy',
				'section'		=> 'footer_section',
				'type'			=> 'dropdown-pages',
				'label'			=> __( 'Privacy Policy' )
			)
		);

		$wp_customize->add_setting(
			'fb_link',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'fb_link',
			array(
				'settings'		=> 'fb_link',
				'section'		=> 'footer_section',
				'type'			=> 'text',
				'label'			=> __( 'Facebook link' )
			)
		);

		$wp_customize->add_setting(
			'tw_link',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'tw_link',
			array(
				'settings'		=> 'tw_link',
				'section'		=> 'footer_section',
				'type'			=> 'text',
				'label'			=> __( 'Twitter link' )
			)
		);						

		$wp_customize->add_setting(
			'linkedin_link',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'linkedin_link',
			array(
				'settings'		=> 'linkedin_link',
				'section'		=> 'footer_section',
				'type'			=> 'text',
				'label'			=> __( 'Linkedin link' )
			)
		);	

		$wp_customize->add_setting(
			'copyright',
			array(
				'sanitize_callback' => 'sanitize_text'
			)
		);

		$wp_customize->add_control(
			'copyright',
			array(
				'settings'		=> 'copyright',
				'section'		=> 'footer_section',
				'type'			=> 'text',
				'label'			=> __( 'Copyright' )
			)
		);	
}
add_action( 'customize_register', 'theme_customize_register' );

function customizer_script() {
	wp_enqueue_script( 'total-customizer-script', get_template_directory_uri() .'/inc/js/customizer-scripts.js', array("jquery"),'', true  );
	wp_enqueue_style( 'total-customizer-style', get_template_directory_uri() .'/inc/css/customizer-style.css');	
}
add_action( 'customize_controls_enqueue_scripts', 'customizer_script' );

if( class_exists( 'WP_Customize_Control' ) ):	

class Total_Dropdown_Chooser extends WP_Customize_Control{
	public $type = 'dropdown_chooser';

	public function render_content(){
		if ( empty( $this->choices ) )
                return;
		?>
            <label>
                <span class="customize-control-title">
                	<?php echo esc_html( $this->label ); ?>
                </span>

                <?php if($this->description){ ?>
	            <span class="description customize-control-description">
	            	<?php echo wp_kses_post($this->description); ?>
	            </span>
	            <?php } ?>

                <select class="hs-chosen-select" <?php $this->link(); ?>>
                    <?php
                    foreach ( $this->choices as $value => $label )
                        echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html( $label ) . '</option>';
                    ?>
                </select>
            </label>
		<?php
	}
}

class Display_Gallery_Control extends WP_Customize_Control{
	public $type = 'gallery';
	 
	public function render_content() {
	?>
	<label>
		<span class="customize-control-title">
			<?php echo esc_html( $this->label ); ?>
		</span>

		<?php if($this->description){ ?>
			<span class="description customize-control-description">
			<?php echo wp_kses_post($this->description); ?>
			</span>
		<?php } ?>

		<div class="gallery-screenshot clearfix">
    	<?php
        	{
        	$ids = explode( ',', $this->value() );
            	foreach ( $ids as $attachment_id ) {
                	$img = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
                	echo '<div class="screen-thumb"><img src="' . esc_url($img[0]) . '" /></div>';
            	}
        	}
    	?>
    	</div>

    	<input id="edit-gallery" class="button upload_gallery_button" type="button" value="<?php _e('Add/Edit Gallery','total') ?>" />
		<input id="clear-gallery" class="button upload_gallery_button" type="button" value="<?php _e('Clear','total') ?>" />
		<input type="hidden" class="gallery_values" <?php echo $this->link() ?> value="<?php echo esc_attr( $this->value() ); ?>">
	</label>
	<?php
	}
}

class Switch_Control extends WP_Customize_Control{
	public $type = 'switch';
	public $on_off_label = array();

	public function __construct($manager, $id, $args = array() ){
        $this->on_off_label = $args['on_off_label'];
        parent::__construct( $manager, $id, $args );
    }

	public function render_content(){
    ?>
	    <span class="customize-control-title">
			<?php echo esc_html( $this->label ); ?>
		</span>

		<?php if($this->description){ ?>
			<span class="description customize-control-description">
			<?php echo wp_kses_post($this->description); ?>
			</span>
		<?php } ?>

		<?php
			$switch_class = ($this->value() == 'on') ? 'switch-on' : '';
			$on_off_label = $this->on_off_label;
		?>
		<div class="onoffswitch <?php echo $switch_class; ?>">
			<div class="onoffswitch-inner">
				<div class="onoffswitch-active">
					<div class="onoffswitch-switch"><?php echo esc_html($on_off_label['on']) ?></div>
				</div>

				<div class="onoffswitch-inactive">
					<div class="onoffswitch-switch"><?php echo esc_html($on_off_label['off']) ?></div>
				</div>
			</div>	
		</div>
		<input <?php $this->link(); ?> type="hidden" value="<?php echo esc_attr($this->value()); ?>"/>
		<?php
    }
}

class Customize_Heading extends WP_Customize_Control {
	public $type = 'heading';

    public function render_content() {
    	if ( !empty( $this->label ) ) : ?>
            <h3 style="background: white;padding: 0.5rem;border-left: 4px solid #308bca;;color: #075082;"><?php echo esc_html( $this->label ); ?></h3>
        <?php endif;

        if($this->description){ ?>
			<span class="description customize-control-description">
			<?php echo wp_kses_post($this->description); ?>
			</span>
		<?php }
    }
}

endif;


//SANITIZATION FUNCTIONS
function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function total_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function total_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function total_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function total_sanitize_choices_array( $input, $setting ) {
    global $wp_customize;
 	
 	if(!empty($input)){
    	$input = array_map('absint', $input);
    }

    return $input;
} 