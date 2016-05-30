<?php
class SH_Taxonomies
{
	
	var $team_cat_slug = '';
	var $services_cat_slug = '' ;
	var $testimonials_cat_slug = '' ;
	var $catalog_cat_slug = '' ;
	var $history_cat_slug = '' ;
	
	function __construct()
	{
		// Hook into the 'init' action
		//add_action( 'init', array($this, 'taxonomies'), 0 );
		$theme_option = _WSH()->option() ; 
		$this->team_cat_slug = sh_set($theme_option , 'team_category_permalink' , 'team_category') ;
		$this->services_cat_slug = sh_set($theme_option , 'services_category_permalink' , 'services_category') ;
		$this->testimonials_cat_slug = sh_set($theme_option , 'testimonial_category_permalink' , 'testimonials_category') ;
		$this->catalog_cat_slug = sh_set($theme_option , 'catalog_category_permalink' , 'catalog_category');
		$this->history_cat_slug = sh_set($theme_option , 'history_category_permalink' , 'history_category');
		$this->taxonomies();
	}
	
	// Register Custom Taxonomy
	function taxonomies()  {
				
		$labels = array(
			'name'                       => _x( 'Category', 'Catalog Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', SH_NAME ),
			'all_items'                  => __( 'All Categories', SH_NAME ),
			'parent_item'                => __( 'Parent Category', SH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', SH_NAME ),
			'new_item_name'              => __( 'New Category Name', SH_NAME ),
			'add_new_item'               => __( 'Add New Category', SH_NAME ),
			'edit_item'                  => __( 'Edit Category', SH_NAME ),
			'update_item'                => __( 'Update Category', SH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', SH_NAME ),
			'search_items'               => __( 'Search Categories', SH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', SH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', SH_NAME ),
		);
	
		$rewrite = array(
			'slug'                       => $this->catalog_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'catalog_category' , 'sh_catalog' , $args );
		
		$labels = array(
			'name'                       => _x( 'Category', 'History Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', SH_NAME ),
			'all_items'                  => __( 'All Categories', SH_NAME ),
			'parent_item'                => __( 'Parent Category', SH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', SH_NAME ),
			'new_item_name'              => __( 'New Category Name', SH_NAME ),
			'add_new_item'               => __( 'Add New Category', SH_NAME ),
			'edit_item'                  => __( 'Edit Category', SH_NAME ),
			'update_item'                => __( 'Update Category', SH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', SH_NAME ),
			'search_items'               => __( 'Search Categories', SH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', SH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', SH_NAME ),
		);
	
		$rewrite = array(
			'slug'                       => $this->history_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'history_category' , 'sh_history' , $args );

		
		
		$labels = array(
			'name'                       => _x( 'Category', 'Testimonial Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', SH_NAME ),
			'all_items'                  => __( 'All Categories', SH_NAME ),
			'parent_item'                => __( 'Parent Category', SH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', SH_NAME ),
			'new_item_name'              => __( 'New Category Name', SH_NAME ),
			'add_new_item'               => __( 'Add New Category', SH_NAME ),
			'edit_item'                  => __( 'Edit Category', SH_NAME ),
			'update_item'                => __( 'Update Category', SH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', SH_NAME ),
			'search_items'               => __( 'Search Categories', SH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', SH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', SH_NAME ),
		);
	
		$rewrite = array(
			'slug'                       => $this->testimonials_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'testimonials_category', 'sh_testimonials', $args );
		
		
		$labels = array(
			'name'                       => _x( 'Category', 'Team Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', SH_NAME ),
			'all_items'                  => __( 'All Categories', SH_NAME ),
			'parent_item'                => __( 'Parent Category', SH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', SH_NAME ),
			'new_item_name'              => __( 'New Category Name', SH_NAME ),
			'add_new_item'               => __( 'Add New Category', SH_NAME ),
			'edit_item'                  => __( 'Edit Category', SH_NAME ),
			'update_item'                => __( 'Update Category', SH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', SH_NAME ),
			'search_items'               => __( 'Search Categories', SH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', SH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', SH_NAME ),
		);
	
		$rewrite = array(
			'slug'                       => $this->team_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'team_category', 'sh_team', $args );
		
		$labels = array(
			'name'                       => _x( 'Category', 'Service Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', SH_NAME ),
			'all_items'                  => __( 'All Categories', SH_NAME ),
			'parent_item'                => __( 'Parent Category', SH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', SH_NAME ),
			'new_item_name'              => __( 'New Category Name', SH_NAME ),
			'add_new_item'               => __( 'Add New Category', SH_NAME ),
			'edit_item'                  => __( 'Edit Category', SH_NAME ),
			'update_item'                => __( 'Update Category', SH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', SH_NAME ),
			'search_items'               => __( 'Search Categories', SH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', SH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', SH_NAME ),
		);
	
		$rewrite = array(
			'slug'                       => $this->services_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy('services_category', 'sh_services', $args );
		
		/*** Register faqs taxonomy faq_category */
		
	}
}