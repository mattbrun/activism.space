<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function customizer_library_mk_options() {

	// Theme defaults
	$primary_color = '#5bc08c';
	$secondary_color = '#666';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Colors
	$section = 'colors';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Colors & Typography', 'mk' ),
		'priority' => '40'
	);
	
	$font_choices = customizer_library_get_font_choices();

	$options['mk_main_font'] = array(
		'id' => 'mk_main_font',
		'label'   => __( 'Primary Font', 'mk' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans'
	);

	$options['mk_headers_font'] = array(
		'id' => 'mk_headers_font',
		'label'   => __( 'Header Font', 'mk' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans'
	);
	
	
	$options['mk_body_text_color'] = array(
		'id' => 'mk_body_text_color',
		'label'   => __( 'Body Text Color', 'mk' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#666666',
	);
	
	$options['mk_a_color'] = array(
		'id' => 'mk_a_color',
		'label'   => __( 'Links Color', 'mk' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#337ab7',
	);
	
	$options['mk_a_hover_color'] = array(
		'id' => 'mk_a_hover_color',
		'label'   => __( 'Links Hover and Focus Color', 'mk' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#23527c',
	);
	
	
	$section = 'general';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'General Settings', 'mk' ),
		'priority' => '25'
	);

	$options['mk_site_logo'] = array(
		'id' => 'mk_site_logo',
		'label'   => __( 'Logo', 'mk' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['mk_site_favicon'] = array(
		'id' => 'mk_site_favicon',
		'label'   => __( 'Favicon', 'mk' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);

	$ly = array(
		'classic' => 'Classic',
		'grid' => 'Grid'
	);

	$options['mk_blog_layout'] = array(
		'id' => 'mk_blog_layout',
		'label'   => __( 'Blog Index Layout', 'mk' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $ly,
		'default' => 'classic'
	);
	
	$options['mk_show_header_search'] = array(
		'id' => 'mk_show_header_search',
		'label'   => __( 'Header Search', 'mk' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);
	
	$options['mk_show_custom_header_image'] = array(
		'id' => 'mk_show_custom_header_image',
		'label'   => __( 'Custom Header Image Section', 'mk' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);
	
	// Social Links 
	$slider = 'slider';

	$panels[] = array(
		'id' => $slider,
		'title' => __( 'Homepage Slider', 'mk' ),
		'priority' => '30'
	);

	$section = 'slider-section';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Homepage Slider', 'mk' ),
		'priority' => '10',
		'panel' => $slider
	);
	
	$clrs = array(
	'btn-default' => 'Default',
	'btn-primary' => 'Primary',
	'btn-success' => 'Success',
	'btn-info' => 'Info',
	'btn-warning' => 'Warning',
	'btn-danger' => 'Danger',
	);

	$options['mk_slider_button'] = array(
		'id' => 'mk_slider_button',
		'label'   => __( 'Slider Button Style', 'mk' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $clrs,
		'default' => 'btn-info'
	);
	/* option group */
	
	$options['mk_show_default_slider'] = array(
		'id' => 'mk_show_default_slider',
		'label'   => __( 'Show Default Homepage Slider ', 'mk' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);
	$options['mk_slide_1_image'] = array(
		'id' => 'mk_slide_1_image',
		'label'   => __( 'Slide1 Image', 'mk' ),
		'section' => $section,
		'type'    => 'upload',
		 'default' => get_template_directory_uri() . '/images/slides/slide1.jpg',
	);
	$options['mk_slide1_caption'] = array(
		'id' => 'mk_slide1_caption',
		'label'   => __( 'Slide1 Main Caption', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'We are MK Theme', 'mk'),
	);
	$options['mk_slide1_subcaption'] = array(
		'id' => 'mk_slide1_subcaption',
		'label'   => __( 'Slide1 Sub Caption', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'We make beautiful things happen', 'mk'),
	);
	$options['mk_slide1_url'] = array(
		'id' => 'mk_slide1_url',
		'label'   => __( 'Slide1 Btn URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_slide1_btntext'] = array(
		'id' => 'mk_slide1_btntext',
		'label'   => __( 'Slide1 Btn Text', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Learn More', 'mk'),
	);
	/* option group */
	$options['mk_slide_2_image'] = array(
		'id' => 'mk_slide_2_image',
		'label'   => __( 'Slide2 Image', 'mk' ),
		'section' => $section,
		'type'    => 'upload',
		 'default' => get_template_directory_uri() . '/images/slides/slide2.jpg',
	);
	$options['mk_slide2_caption'] = array(
		'id' => 'mk_slide2_caption',
		'label'   => __( 'Slide2 Main Caption', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Stylish free Wordpress Theme', 'mk'),
	);
	$options['mk_slide2_subcaption'] = array(
		'id' => 'mk_slide2_subcaption',
		'label'   => __( 'Slide2 Sub Caption', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Optimized for mobile devices, clean w3C validated markup', 'mk'),
	);
	$options['mk_slide2_url'] = array(
		'id' => 'mk_slide2_url',
		'label'   => __( 'Slide2 Btn URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_slide2_btntext'] = array(
		'id' => 'mk_slide2_btntext',
		'label'   => __( 'Slide2 Btn Text', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Learn More', 'mk'),
	);
	/* option group */
	$options['mk_slide_3_image'] = array(
		'id' => 'mk_slide_3_image',
		'label'   => __( 'Slide3 Image', 'mk' ),
		'section' => $section,
		'type'    => 'upload',
		 'default' => get_template_directory_uri() . '/images/slides/slide3.jpg',
	);
	$options['mk_slide3_caption'] = array(
		'id' => 'mk_slide3_caption',
		'label'   => __( 'Slide3 Main Caption', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Get more with MK <br/>proffessional Version', 'mk'),
	);
	$options['mk_slide3_subcaption'] = array(
		'id' => 'mk_slide3_subcaption',
		'label'   => __( 'Slide3 Sub Caption', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Premium sliders, page composer, unlimited layouts...', 'mk'),
	);
	$options['mk_slide3_url'] = array(
		'id' => 'mk_slide3_url',
		'label'   => __( 'Slide3 Btn URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_slide3_btntext'] = array(
		'id' => 'mk_slide3_btntext',
		'label'   => __( 'Slide3 Btn Text', 'mk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Learn More', 'mk'),
	);
	/* option group */
	
	// Social Links 
	$panel = 'panel';

	$panels[] = array(
		'id' => $panel,
		'title' => __( 'Social Links', 'mk' ),
		'priority' => '30'
	);

	$section = 'panel-section';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Social Links', 'mk' ),
		'priority' => '10',
		'panel' => $panel
	);
	
	$options['mk_sl_facebook'] = array(
		'id' => 'mk_sl_facebook',
		'label'   => __( 'Facebook URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_sl_twitter'] = array(
		'id' => 'mk_sl_twitter',
		'label'   => __( 'Twitter URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	
	$options['mk_sl_gplus'] = array(
		'id' => 'mk_sl_gplus',
		'label'   => __( 'Google Plus URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_sl_pinterest'] = array(
		'id' => 'mk_sl_pinterest',
		'label'   => __( 'Pinterest URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_sl_instagram'] = array(
		'id' => 'mk_sl_instagram',
		'label'   => __( 'Instagram URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);
	$options['mk_sl_dribble'] = array(
		'id' => 'mk_sl_dribble',
		'label'   => __( 'Dribble URL', 'mk' ),
		'section' => $section,
		'type'    => 'url',
	);

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_mk_options' );
