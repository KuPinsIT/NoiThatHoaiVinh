<?php
$sh_sc = array();
$sh_sc['sh_services']	=	array(
					"name" => __("Services", SH_NAME),
					"base" => "sh_services",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Service.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter text limit of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_new_arrival'] = array(
			"name" => __("New Arrival", SH_NAME),
			"base" => "sh_new_arrival",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the New Arrival.', SH_NAME),
			"params" => array(
			 	array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   'value' => '',
				   "description" => __("Enter the Title", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Sub-Title", SH_NAME),
				   "param_name" => "subtitle",
				   'value' => '',
				   "description" => __("Enter the Sub-Title", SH_NAME)
				),
				array(
				   "type" => "attach_image",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Background Image", SH_NAME),
				   "param_name" => "img",
				   'value' => '',
				   "description" => __("Enter the Image url", SH_NAME)
				),
            				
			)
	    );

$sh_sc['sh_featured_products']	=	array(
					"name" => __("Featured Products", SH_NAME),
					"base" => "sh_featured_products",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Products 4 column.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Products to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "checkbox",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Hide Overlay", SH_NAME),
						   "param_name" => "hide_overlay",
						   'value' => array(__('Hide Overlay', SH_NAME)=>1),
						   "description" => __("Hide Overlay", SH_NAME)
						),
					)
				);

$sh_sc['sh_featured_cats']	=	array(
		"name" => __("Featured Categories", SH_NAME),
		"base" => "sh_featured_cats",
		"class" => "",
		"category" => __('Furniture House', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show featured Categories.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter title.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter sub-title', SH_NAME ),
			   "param_name" => "subtitle",
			   "description" => __('Enter sub-title.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter number of categories to show.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sort By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array(__('Name', SH_NAME)=>'name', __('Term ID', SH_NAME)=>'id', __('Slug', SH_NAME)=>'slug', __('Post Count', SH_NAME)=>'count',__('Term Group', SH_NAME)=>'term_group',),
			   "description" => __("Choose the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Hide Empty Categories", SH_NAME),
			   "param_name" => "empty",
			   'value' => array(__('Hide Empty cat', SH_NAME)=>1),
			   "description" => __("Hide Empty Categories", SH_NAME)
			),
			
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Hide Overlay", SH_NAME),
			   "param_name" => "hide_overlay",
			   'value' => array(__('Hide Overlay', SH_NAME)=>1),
			   "description" => __("Hide Overlay", SH_NAME)
			     ),
			
			
		)
);

$sh_sc['sh_featured_products2']	=	array(
					"name" => __("Featured Products 2", SH_NAME),
					"base" => "sh_featured_products2",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Products 3 column.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Products to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "checkbox",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Hide Overlay", SH_NAME),
						   "param_name" => "hide_overlay",
						   'value' => array(__('Hide Overlay', SH_NAME)=>1),
						   "description" => __("Hide Overlay", SH_NAME)
						),
					)
				);

$sh_sc['sh_clients'] = array(
			"name" => __("Clients", SH_NAME),
			"base" => "sh_clients",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the Clients logo.', SH_NAME),
			"params" => array(
			 	array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   'value' => '',
				   "description" => __("Enter the Title", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Sub-Title", SH_NAME),
				   "param_name" => "subtitle",
				   'value' => '',
				   "description" => __("Enter the Sub-Title", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Number", SH_NAME),
				   "param_name" => "num",
				   'value' => '',
				   "description" => __("Enter the Number of Clients.", SH_NAME)
				),
				
            )
	    );

$sh_sc['sh_testimonial']	=	array(
		"name" => __("Testimonials", SH_NAME),
		"base" => "sh_testimonial",
		"class" => "",
		"category" => __('Furniture House', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show testimonials.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Sub-Title', SH_NAME ),
			   "param_name" => "subtitle",
			   "description" => __('Enter Sub-Title of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text Limit', SH_NAME ),
			   "param_name" => "text_limit",
			   "description" => __('Enter text_limit of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
			),
		
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', SH_NAME ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
			   "description" => __( 'Choose Category.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
		)
	);

$sh_sc['sh_services2']	=	array(
					"name" => __("Services 2", SH_NAME),
					"base" => "sh_services2",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Service.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter text limit of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_testimonial2']	=	array(
		"name" => __("Testimonials 2", SH_NAME),
		"base" => "sh_testimonial2",
		"class" => "",
		"category" => __('Furniture House', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show testimonials.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Sub-Title', SH_NAME ),
			   "param_name" => "subtitle",
			   "description" => __('Enter Sub-Title of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text Limit', SH_NAME ),
			   "param_name" => "text_limit",
			   "description" => __('Enter text_limit of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
			),
		
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', SH_NAME ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
			   "description" => __( 'Choose Category.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
		)
	);

$sh_sc['sh_blog']	=	array(
					"name" => __("Our Blog", SH_NAME),
					"base" => "sh_blog",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase',
					'description' => __('Show Blog Posts', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of Posts to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter Sub-Title of Posts to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of posts to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_featured_products3']	=	array(
					"name" => __("Featured Products 3", SH_NAME),
					"base" => "sh_featured_products3",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Products 1 column.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Products to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_testimonial3']	=	array(
		"name" => __("Testimonials 3", SH_NAME),
		"base" => "sh_testimonial3",
		"class" => "",
		"category" => __('Furniture House', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show testimonials.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text Limit', SH_NAME ),
			   "param_name" => "text_limit",
			   "description" => __('Enter text_limit of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
			),
		
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', SH_NAME ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
			   "description" => __( 'Choose Category.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
		)
	);

$sh_sc['sh_clients2'] = array(
			"name" => __("Clients 2", SH_NAME),
			"base" => "sh_clients2",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the Clients logo.', SH_NAME),
			"params" => array(
			 	array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   'value' => '',
				   "description" => __("Enter the Title", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Number", SH_NAME),
				   "param_name" => "num",
				   'value' => '',
				   "description" => __("Enter the Number of Clients.", SH_NAME)
				),
				
            )
	    );

$sh_sc['sh_new_arrival2'] = array(
			"name" => __("New Arrival 2", SH_NAME),
			"base" => "sh_new_arrival2",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the New Arrival.', SH_NAME),
			"params" => array(
			 	
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Content", SH_NAME),
				   "param_name" => "content",
				   'value' => '',
				   "description" => __("Enter the content", SH_NAME)
				),
				array(
				   "type" => "attach_image",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Background Image", SH_NAME),
				   "param_name" => "img",
				   'value' => '',
				   "description" => __("Enter the Image url", SH_NAME)
				),
				array(
				   "type" => "dropdown",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Style", SH_NAME),
				   "param_name" => "style",
				   'value' => array_flip(array('left'=>__('Left Style', SH_NAME),'right'=>__('Right Style', SH_NAME) ) ),			
				   "description" => __("Enter the style", SH_NAME)
				),
            				
			)
	    );

$sh_sc['sh_new_products']	=	array(
					"name" => __("New Products", SH_NAME),
					"base" => "sh_new_products",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Products 4 column.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Products to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_featured_cats2']	=	array(
		"name" => __("Featured Categories 2", SH_NAME),
		"base" => "sh_featured_cats2",
		"class" => "",
		"category" => __('Furniture House', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show featured Categories.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter title.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter number of categories to show.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sort By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array(__('Name', SH_NAME)=>'name', __('Term ID', SH_NAME)=>'id', __('Slug', SH_NAME)=>'slug', __('Post Count', SH_NAME)=>'count',__('Term Group', SH_NAME)=>'term_group',),
			   "description" => __("Choose the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Hide Empty Categories", SH_NAME),
			   "param_name" => "empty",
			   'value' => array(__('Hide Empty cat', SH_NAME)=>1),
			   "description" => __("Hide Empty Categories", SH_NAME)
			),
			
			
		)
);
$sh_sc['sh_product_tab']	=	array(
					"name" => __("Products Tabs", SH_NAME),
					"base" => "sh_product_tab",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Products 3 column.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Products to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' => FALSE ), false ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_testimonial4']	=	array(
		"name" => __("Testimonials 4", SH_NAME),
		"base" => "sh_testimonial4",
		"class" => "",
		"category" => __('Furniture House', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show testimonials.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text Limit', SH_NAME ),
			   "param_name" => "text_limit",
			   "description" => __('Enter text_limit of testimonials to Show.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
			),
		
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', SH_NAME ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
			   "description" => __( 'Choose Category.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
		)
	);

$sh_sc['sh_featured_products4']	=	array(
					"name" => __("Featured Products 4", SH_NAME),
					"base" => "sh_featured_products4",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Products 3 column.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Products to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "checkbox",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Hide Overlay", SH_NAME),
						   "param_name" => "hide_overlay",
						   'value' => array(__('Hide Overlay', SH_NAME)=>1),
						   "description" => __("Hide Overlay", SH_NAME)
						),
					)
				);

$sh_sc['sh_services3']	=	array(
					"name" => __("Services 3", SH_NAME),
					"base" => "sh_services3",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Service.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of Services section to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter text limit of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_social_media'] = array(
			"name" => __("Social Media", SH_NAME),
			"base" => "sh_social_media",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the Social Profile links', SH_NAME),
			"params" => array(
			 	array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   'value' => '',
				   "description" => __("Enter the Title", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Content", SH_NAME),
				   "param_name" => "content",
				   'value' => '',
				   "description" => __("Enter the text", SH_NAME)
				),
				array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Show social media", SH_NAME),
			   "param_name" => "social_media",
			   'value' => array_flip(sh_social_media_array()),
			   "description" => __("Hide Empty Categories", SH_NAME)
			),
				           				
			)
	    );

$sh_sc['sh_catalog']	=	array(
					"name" => __("Catalog", SH_NAME),
					"base" => "sh_catalog",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Catalog.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'catalog_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "checkbox",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Hide Overlay", SH_NAME),
						   "param_name" => "hide_overlay",
						   'value' => array(__('Hide Overlay', SH_NAME)=>1),
						   "description" => __("Hide Overlay", SH_NAME)
						 ),
					)
				);
$sh_sc['sh_google_map']	=	array(
					"name" => __("Google Map", SH_NAME),
					"base" => "sh_google_map",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-map-marker' ,
					'description' => __('Show the map Information', SH_NAME),
					"params" => array(
						 array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Latitude', SH_NAME ),
						   "param_name" => "lat",
						   "description" => __('Enter the Latitude', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Longitude', SH_NAME ),
						   "param_name" => "long",
						   "description" => __('Enter the Longitude', SH_NAME )
						),
						 array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Marker Latitude', SH_NAME ),
						   "param_name" => "mark_lat",
						   "description" => __('Enter the Latitude', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Longitude', SH_NAME ),
						   "param_name" => "mark_long",
						   "description" => __('Enter the Longitude', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Location Title', SH_NAME ),
						   "param_name" => "location_title",
						   "description" => __('Enter the location title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Location Address', SH_NAME ),
						   "param_name" => "content",
						   "description" => __('Enter the Location address to show on marker', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Marker Image', SH_NAME ),
						   "param_name" => "marker",
						   "description" => __('Choose the marker image or leave it to use default', SH_NAME )
						),
						
					)
				);

$sh_sc['sh_contact_form']	=	array(
					"name" => __("Contact Form", SH_NAME),
					"base" => "sh_contact_form",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-envelope' ,
					'description' => __('Show the contact form', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						 array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Reciever Email Address', SH_NAME ),
						   "param_name" => "email",
						   "description" => __('Enter the email id where email is recieve after form submission.', SH_NAME )
						),
						
					)
				);
$sh_sc['sh_contact_facts']	=	array(
			"name" => __("Contact Facts", SH_NAME),
			"base" => "sh_contact_facts",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_contact_fact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Contact Facts to your theme.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the Title", SH_NAME)
				),
			
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_contact_fact']	=	array(
			"name" => __("Contact Fact", SH_NAME),
			"base" => "sh_contact_fact",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_contact_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Contact Fact.', SH_NAME),
			"params" => array(
				array(
				   "type" => "dropdown",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __( 'FontAwesom icon', SH_NAME ),
				   "param_name" => "icon",
				   "value" => (array)sh_get_fontawesome_icons(),
				   "description" => __( 'Choose Category.', SH_NAME )
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the Title to show.", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Text Content", SH_NAME),
				   "param_name" => "content",
				   "description" => __("Enter the Text Content to show.", SH_NAME)
				),
				
				
							
			),
		);

$sh_sc['sh_team']	=	array(
					"name" => __("Team", SH_NAME),
					"base" => "sh_team",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Teams.', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'team_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_call_to_action']	=	array(
					"name" => __("Call To Action", SH_NAME),
					"base" => "sh_call_to_action",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Call to action.', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Text to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter Button Link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter Button Text', SH_NAME )
						),
						
					)
				);
$sh_sc['sh_pricing_section']	=	array(
			"name" => __("Pricing Section", SH_NAME),
			"base" => "sh_pricing_section",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_pricing_table'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Number of pricing tables to your theme.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("SubTitle", SH_NAME),
				   "param_name" => "subtitle",
				   "description" => __("Enter the subtitle.", SH_NAME)
				),
			
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_pricing_table']	=	array(
			"name" => __("Pricing Table", SH_NAME),
			"base" => "sh_pricing_table",
			"class" => "",
			"category" => __('Furniture House', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_pricing_section'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Pricing Table.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title to show.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Price", SH_NAME),
				   "param_name" => "price",
				   "description" => __("Enter the price to show", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Package Duration", SH_NAME),
				   "param_name" => "package_duration",
				   "description" => __("Enter the Package duration to show", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Features", SH_NAME),
				   "param_name" => "feature_str",
				   "description" => __("Enter the features to show one per line.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Text", SH_NAME),
				   "param_name" => "btn_text",
				   "description" => __("Enter the button text to show", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Link", SH_NAME),
				   "param_name" => "btn_link",
				   "description" => __("Enter the button link to show", SH_NAME)
				),
				array(
				   "type" => "checkbox",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("is Active", SH_NAME),
				   "param_name" => "active",
				   'value' => array(__('is active', SH_NAME)=>1),
				   "description" => __("is active or not", SH_NAME)
				),
			
			),
		);

$sh_sc['sh_services4']	=	array(
					"name" => __("Services 4", SH_NAME),
					"base" => "sh_services4",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services images', SH_NAME),
					"params" => array(
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Large Image", SH_NAME),
						   "param_name" => "img",
						   'value' => '',
						   "description" => __("Enter the Large Image", SH_NAME)
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Small Image", SH_NAME),
						   "param_name" => "img2",
						   'value' => '',
						   "description" => __("Enter the Small Image", SH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter Button Link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter Button Text', SH_NAME )
						),
						
					)
				);
$sh_sc['sh_heading']	=	array(
					"name" => __("Heading", SH_NAME),
					"base" => "sh_heading",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show the heading', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter the subtitle', SH_NAME )
						),
						
					)
				);

$sh_sc['sh_services5']	=	array(
					"name" => __("Services 5", SH_NAME),
					"base" => "sh_services5",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services text', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter the Text', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Read more text', SH_NAME ),
						   "param_name" => "readmore_text",
						   "description" => __('Enter the Read more Text', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Read more link', SH_NAME ),
						   "param_name" => "readmore_link",
						   "description" => __('Enter the Read more Link', SH_NAME )
						),
						
					)
				);

$sh_sc['sh_history']	=	array(
					"name" => __("History", SH_NAME),
					"base" => "sh_history",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show History.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of post to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_services6']	=	array(
					"name" => __("Services 6", SH_NAME),
					"base" => "sh_services6",
					"class" => "",
					"category" => __('Furniture House', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Service.', SH_NAME),
					"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter text limit of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
				
				

				
/*----------------------------------------------------------------------------------------------*/
$sh_sc['sh_projects']	=	array(
		"name" => __("Add Portfolio", SH_NAME),
		"base" => "sh_projects",
		"class" => "",
		"category" => __('builder', SH_NAME),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show Posts from the portfolio.', SH_NAME),
		"params" => array(
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', SH_NAME ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', SH_NAME )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', SH_NAME ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', SH_NAME ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'portfolio_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', SH_NAME )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", SH_NAME),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", SH_NAME),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
			   "description" => __("Enter the sorting order.", SH_NAME)
			),
		)
	);
$sh_sc['sh_call_out'] = array(
			"name" => __("Call Out", SH_NAME),
			"base" => "sh_call_out",
			"class" => "",
			"category" => __('builder', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the call out banner.', SH_NAME),
			"params" => array(
			array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Enter Message on the banner", SH_NAME),
				   "param_name" => "msg",
				   'value' => '',
				   "description" => __("Enter the message", SH_NAME)
				),
            array(
				   "type" => "dropdown",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __( 'Backgroud Color', SH_NAME ),
				   "param_name" => "color",
				   "value" => array_flip(  array( 'true' => 'colorful', 'false' =>'None' ) ),
				   "description" => __( 'Choose background color left empty if you choosed the background image.', SH_NAME )
				),				
			array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Text", SH_NAME),
				   "param_name" => "btn_text",
				   'value' => '',
				   "description" => __("Enter the button text", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Link", SH_NAME),
				   "param_name" => "btn_link",
				   'value' => '',
				   "description" => __("Enter the Image Link", SH_NAME)
				),
				array(
				   "type" => "attach_image",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Image", SH_NAME),
				   "param_name" => "image",
				   'value' => '',
				   "description" => __("Enter the Image url", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Image Title", SH_NAME),
				   "param_name" => "title",
				   'value' => '',
				   "description" => __("Enter the Image Title", SH_NAME)
				),		
			)
	    );
$sh_sc['sh_services_2']	=	array(
					"name" => __("Services 2", SH_NAME),
					"base" => "sh_services_2",
					"class" => "",
					"category" => __('builder', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Service.', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						  array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Inner Title', SH_NAME ),
						   "param_name" => "title_inner",
						   "description" => __('Enter the Inner title or leave empty for none.', SH_NAME )
						),
                        array(
				
							   "type" => "textfield",
				
							   "holder" => "div",
				
							   "class" => "",
				
							   "heading" => __('Enter text from title to make colorful', SH_NAME ),
				
							   "param_name" => "title",
				
							   "description" => __('Enter the title text to make colorful make sure that text exists in title.', SH_NAME )
				
							),
							
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
		
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_page_heading'] = array(
			"name" => __("Heading", SH_NAME),
			"base" => "sh_page_heading",
			"class" => "",
			"category" => __('builder', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('show the heading.', SH_NAME),
			"params" => array(
			array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Enter title", SH_NAME),
				   "param_name" => "title",
				   'value' => '',
				   "description" => __("Enter the title", SH_NAME)
				),
			array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Enter inner titile", SH_NAME),
				   "param_name" => "title_inner",
				   'value' => '',
				   "description" => __("Enter the inner title", SH_NAME)
				),
						
			)
	    );
$sh_sc['sh_services_list']	=	array(
					"name" => __("Services List", SH_NAME),
					"base" => "sh_services_list",
					"class" => "",
					"category" => __('builder', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Services List.', SH_NAME),
					"params" => array(
								
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
		
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_about-slider'] = array(
			"name" => __("About-us Slider", SH_NAME),
			"base" => "sh_about-slider",
			"class" => "",
			"category" => __('builder', SH_NAME),
			"icon" => 'fa-user' ,
			'description' => __('Add images to the slider.', SH_NAME),
			"params" => array(
	
				array(
				   "type" => "attach_images",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Image", SH_NAME),
				   "param_name" => "image",
				   'value' => '',
				   "description" => __("Enter the Image url", SH_NAME)
				),
					
			)
	    );
$sh_sc['sh_accordion']	=	array(
					"name" => __("Blog Posts Accordion", SH_NAME),
					"base" => "sh_accordion",
					"class" => "",
					"category" => __('builder', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Accordion.', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						 
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
		
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_about']	=	array(
					"name" => __("About", SH_NAME),
					"base" => "sh_about",
					"class" => "",
					"category" => __('builder', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show about the site.', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						  array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Inner Title', SH_NAME ),
						   "param_name" => "title_inner",
						   "description" => __('Enter the Inner title or leave empty for none.', SH_NAME )
						),
						array(
							   "type" => "attach_image",
							   "holder" => "div",
							   "class" => "",
							   "heading" => __("Image", SH_NAME),
							   "param_name" => "image",
							   'value' => '',
							   "description" => __("Enter the Image url", SH_NAME)
							),
                       
					)
				);
		
$sh_sc['sh_contact_info']	=	array(
					"name" => __("Contact Information", SH_NAME),
					"base" => "sh_contact_info",
					"class" => "",
					"category" => __('builder', SH_NAME),
					"icon" => 'fa-envelope-o' ,
					'description' => __('Show the contact Information', SH_NAME),
					"params" => array(
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title or leave empty for none.', SH_NAME )
						),
						 array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Address', SH_NAME ),
						   "param_name" => "address",
						   "description" => __('Enter the address', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Phone', SH_NAME ),
						   "param_name" => "phone",
						   "description" => __('Enter the phone', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Email', SH_NAME ),
						   "param_name" => "email",
						   "description" => __('Enter the email', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Website URL', SH_NAME ),
						   "param_name" => "website",
						   "description" => __('Enter the website url', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Office Hours', SH_NAME ),
						   "param_name" => "content",
						   "description" => __('Enter the office working hours', SH_NAME )
						),
					)
				);
/*----------------------------------------------------------------------------*/
$sh_sc = apply_filters( '_sh_shortcodes_array', $sh_sc );
	
return $sh_sc;