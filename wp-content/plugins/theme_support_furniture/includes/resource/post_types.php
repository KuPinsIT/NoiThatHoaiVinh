<?php

$theme_option = get_option(SH_NAME.'_theme_options') ; 

$team_slug = sh_set($theme_option , 'team_permalink' , 'team') ;

$services_slug = sh_set($theme_option , 'services_permalink' , 'services') ;

$testimonial_slug = sh_set($theme_option , 'testimonial_permalink' , 'testimonials') ;

$catalog_slug = sh_set($theme_option , 'catalog_permalink' , 'catalog') ;

$history_slug = sh_set($theme_option , 'history_permalink' , 'history') ;


//$faqs_slug = sh_set($theme_option , 'faqs_permalink' , 'faqs') ;

$options = array();

$options['sh_team'] = array(

								'labels' => array(__('Member', SH_NAME), __('Member', SH_NAME)),

								'slug' => $team_slug ,

								'label_args' => array('menu_name' => __('Teams', SH_NAME)),

								'supports' => array( 'title', 'editor' , 'thumbnail'),

								'label' => __('Member', SH_NAME),

								'args'=>array(

											'menu_icon'=>'dashicons-groups' , 

											'taxonomies'=>array('team_category')

								)

							);
$options['sh_services'] = array(

								'labels' => array(__('Service', SH_NAME), __('Service', SH_NAME)),

								'slug' => $services_slug ,

								'label_args' => array('menu_name' => __('Services', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Service', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-slides' , 

										'taxonomies'=>array('services_category')

								)

							);
$options['sh_testimonials'] = array(

								'labels' => array(__('Testimonial', SH_NAME), __('Testimonial', SH_NAME)),

								'slug' => $testimonial_slug ,

								'label_args' => array('menu_name' => __('Testimonials', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Testimonial', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-slides' , 

										'taxonomies'=>array('testimonial_category')

								)

							);							
																					


$options['sh_catalog'] = array(

								'labels' => array(__('Catalog', SH_NAME), __('Catalog', SH_NAME)),

								'slug' => $catalog_slug ,

								'label_args' => array('menu_name' => __('Catalog', SH_NAME)),

								'supports' => array( 'title', 'editor' , 'thumbnail'),

								'label' => __('Catalog', SH_NAME),

								'args'=>array(

											'menu_icon'=>'dashicons-slides' , 

											'taxonomies'=>array('catalog_category')

								)

							);

$options['sh_history'] = array(

								'labels' => array(__('History', SH_NAME), __('History', SH_NAME)),

								'slug' => $history_slug ,

								'label_args' => array('menu_name' => __('History', SH_NAME)),

								'supports' => array( 'title', 'editor' , 'thumbnail'),

								'label' => __('History', SH_NAME),

								'args'=>array(

											'menu_icon'=>'dashicons-slides' , 

											'taxonomies'=>array('history_category')

								)

							);														




/*$options['sh_faqs'] = array(

								'labels' => array(__('Faq', SH_NAME), __('Faq', SH_NAME)),

								'slug' => $testimonial_slug ,

								'label_args' => array('menu_name' => __('Faq', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Faq', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-slides' , 

										'taxonomies'=>array('faqs_category')

								)

							);*/	

