<?php
return array(
    'title' => __( 'Furniture House Theme Options', SH_NAME ),
    'logo' => get_template_directory_uri() . '/images/logo.png',
    'menus' => array(
        // General Settings
         array(
             'title' => __( 'General Settings', SH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-cogs',
            'menus' => array(
                 
				array(
                    'title' => __( 'general Settings', SH_NAME ),
                    'name' => 'general_sub_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        
						array(
                             'type' => 'section',
                            'repeating' => true,
                            'sortable' => true,
                            'title' => __( 'Purchase Information', SH_NAME ),
                            'name' => 'purchase_information',
                            'description' => __( 'To get the auto theme updates provide purchase information', SH_NAME ),
                            'fields' => array(
                                 
                                array(
                                    'type' => 'textbox',
                                    'name' => 'sh_purchase_code',
                                    'label' => __( 'Purchase Code', SH_NAME ),
                                    'description' => __( 'To find the purchase code to TF downloads tab click on Download then choose "License and Purchase code"', SH_NAME ),
                                    'default' => '',
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'sh_purchase_user',
                                    'label' => __( 'Themeforest Username', SH_NAME ),
                                    'description' => __( 'Enter your themeforest username', SH_NAME ),
                                    'default' => '',
                                ),
								
                                
                            ) 
                        ),
								array(
									'type' => 'toggle',
									'name' => 'hide_overlay',
									'label' => __( 'Hide Overlay', SH_NAME ),
									'description' => __( 'Hide Overlay in woocommerce pages', SH_NAME ),
									'default' => 0
								),
						
						 		array(
									'type' => 'color',
									'name' => 'custom_color_scheme',
									'label' => __( 'Green Color', SH_NAME ),
									'description' => __( 'Choose the font color for green color', SH_NAME ),
									'default' => '#3ab54a' 
								) 
						 
                    ) 
                    
                ),
				/** Submenu for heading settings */
                array(
                     'title' => __( 'Header Settings', SH_NAME ),
                    'name' => 'header_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        array(
                             'type' => 'upload',
                            'name' => 'site_favicon',
                            'label' => __( 'Favicon', SH_NAME ),
                            'description' => __( 'Upload the favicon, should be 16x16', SH_NAME ),
                            'default' => '' 
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'site_logo',
                            'label' => __( 'Logo', SH_NAME ),
                            'description' => __( 'Upload the Logo, should be 159x25', SH_NAME ),
                            'default' => '' 
                        ),
						array(
							'type' => 'select',
							'name' => 'header_style',
							'label' => __('Header Style', SH_NAME),
							'description' => __('Choose the the Header Style', SH_NAME),
							'items' => array( 
								array(
										'value'=>'1',
										'label'=>__( 'Header Style 1', SH_NAME ),
									), 
								array(
										'value'=>'2',
										'label'=>__( 'Header Style 2', SH_NAME ),
									), 
								),
							'default' => '1'
						),
						array(
							'type' => 'toggle',
							'name' => 'topbarstatus',
							'label' => __( 'Show Top Bar', SH_NAME ),
							'description' => __( 'Show or hide top bar', SH_NAME ),
							'default' => 0
						),
						array(
							'type' => 'section',
							
							'title' => __('Top bar settings', SH_NAME),
							'name' => 'top_bar',
							'description' => __('This section is used for top bar area', SH_NAME),
							'dependency' => array(
                                'field' => 'topbarstatus',
                                'function' => 'vp_dep_boolean' 
                            ),
							'fields' => array(
									array(
										'type' => 'toggle',
										'name' => 'topbar_left',
										'label' => __( 'Show Top Bar Left Menu', SH_NAME ),
										'description' => __( 'Show Top Bar Left Menu', SH_NAME ),
										'default' => 0
									),
									array(
										'type' => 'toggle',
										'name' => 'topbar_right',
										'label' => __( 'Show Top Bar Right Menu', SH_NAME ),
										'description' => __( 'Show Top Bar Right Menu', SH_NAME ),
										'default' => 0
									),
							),
						),
						array(
							'type' => 'toggle',
							'name' => 'searchbar',
							'label' => __( 'Show Header Search Section', SH_NAME ),
							'description' => __( 'Show Header Search Section', SH_NAME ),
							'default' => 0
						),
						array(
									'type' => 'select',
									'name' => 'wishlist_page',
									'label' => __('Wishlist Page', SH_NAME),
									'description' => __('choose Wishlist page to show in header area, left it if you don\'t want to show wishlist link in header', SH_NAME),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_pages',
												),
											),
										)
									),
						array(
									'type' => 'select',
									'name' => 'compare_page',
									'label' => __('Compare Page', SH_NAME),
									'description' => __('choose Compare page to show in header area, left it if you don\'t want to show Compare link in header', SH_NAME),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_pages',
												),
											),
										)
									),
						array(
									'type' => 'select',
									'name' => 'myaccount_page',
									'label' => __('My Account Page', SH_NAME),
									'description' => __('choose My account page to show in header area, left it if you don\'t want to show wishlist link in header', SH_NAME),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_pages',
												),
											),
										)
									),						
						array(
									'type' => 'select',
									'name' => 'checkout_page',
									'label' => __('Checkout Page', SH_NAME),
									'description' => __('choose Checkout page to show in header area, left it if you don\'t want to show wishlist link in header', SH_NAME),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_pages',
												),
											),
										)
									),
						array(
							'type' => 'toggle',
							'name' => 'shopping_cart_icon',
							'label' => __( 'Show/Hide Shopping cart icon', SH_NAME ),
							'description' => __( 'Show/Hide Shopping cart icon', SH_NAME ),
							'default' => 0
						),
						array(

								'type' => 'sorter',

								'name' => 'sorting_services',

								'max_selection' => 3,

								'label' => __('Choose services', SH_NAME),

								'description' => __('Choose services to show in header', SH_NAME),

								'items' => array(
									'data' => array(
										array(
											'source' => 'function',
											'value' => 'vp_get_services',
										),
									),
								),

							),
												
                       // Custom HEader Style End
                        array(
                             'type' => 'codeeditor',
                            'name' => 'header_css',
                            'label' => __( 'Header CSS', SH_NAME ),
                            'description' => __( 'Write your custom css to include in header.', SH_NAME ),
                            'theme' => 'github',
                            'mode' => 'css' 
                        ) 
                    ) 
                    
                ),
				/** Submenu for footer area */
                array(
                     'title' => __( 'Footer Settings', SH_NAME ),
                    'name' => 'sub_footer_settings',
                    'icon' => 'font-awesome:fa fa-edit',
                    'controls' => array(
                        array(
							'type' => 'toggle',
							'name' => 'footer_top',
							'label' => __( 'Footer Top', SH_NAME ),
							'description' => __( 'Enable or disable Footer Top', SH_NAME ),
							'default' => 1 
						),
						array(
							'type' => 'toggle',
							'name' => 'footer_middle',
							'label' => __( 'Footer Middle', SH_NAME ),
							'description' => __( 'Enable or disable Footer Middle', SH_NAME ),
							'default' => 1 
						),
						array(
							'type' => 'toggle',
							'name' => 'footer_bottom',
							'label' => __( 'Footer Bottom', SH_NAME ),
							'description' => __( 'Enable or disable Footer Bottom', SH_NAME ),
							'default' => 1 
						),
						array(
                            'type' => 'upload',
                            'name' => 'footer_bg',
                            'label' => __( 'Footer Backgroun Image', SH_NAME ),
                            'description' => __( 'Upload the Footer Background Image, should be 1605x563', SH_NAME ),
                            'default' => '' 
                        ),
						array(
							'type' => 'textarea',
							'name' => 'copy_right',
							'label' => __( 'Copy Right Text', SH_NAME ),
							'description' => __( 'Enter the Copy Right Text', SH_NAME ),
							'default' => 'Ideas and designed BY JOLLythemes'
						),
                        array(
                             'type' => 'codeeditor',
                            'name' => 'footer_analytics',
                            'label' => __( 'Footer Analytics / Scripts', SH_NAME ),
                            'description' => __( 'In this area you can put Google Analytics Code or any other Script that you want to be included in the footer before the Body tag.', SH_NAME ),
                            'theme' => 'twilight',
                            'mode' => 'javascript' 
                        ) 
                        
                        
                        
                    ) 
                ), //End of submenu
				array(
                     'title' => __( 'Permalinks Settings', SH_NAME ),
                    'name' => 'permalinks_settings',
                    'icon' => 'font-awesome:fa fa-link',
                    'controls' => array(
                         array(
                             'type' => 'section',
                            'name' => 'post_type_permalink_section',
                            'title' => 'Post Type Permalinks',
                            'fields' => array(
                                 array(
                                    'type' => 'textbox',
                                    'name' => 'team_permalink',
                                    'label' => __( 'Team Permalink', SH_NAME ),
                                    'description' => __( 'Enter Slug for Team Post Type.', SH_NAME ),
                                    'default' => '' 
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'services_permalink',
                                    'label' => __( 'Services Permalink', SH_NAME ),
                                    'description' => __( 'Enter Slug for Services Post Type.', SH_NAME ),
                                    'default' => '' 
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'testimonial_permalink',
                                    'label' => __( 'Testimonial Permalink', SH_NAME ),
                                    'description' => __( 'Enter Permalink for Testimonial Post Type.', SH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'catalog_permalink',
                                    'label' => __( 'Catalog Permalink', SH_NAME ),
                                    'description' => __( 'Enter Permalink for Catalog Post Type.', SH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'history_permalink',
                                    'label' => __( 'History Permalink', SH_NAME ),
                                    'description' => __( 'Enter Permalink for History Post Type.', SH_NAME ),
                                    'default' => '' 
                                ),
                                
								 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'name' => 'category_permalink_section',
                            'title' => 'Category Permalinks',
                            'fields' => array(
                                 array(
                                    'type' => 'textbox',
                                    'name' => 'team_category_permalink',
                                    'label' => __( 'Team Category Permalink', SH_NAME ),
                                    'description' => __( 'Enter Slug for Team Taxonomy.', SH_NAME ),
                                    'default' => '' 
                                ),
                                
                                array(
                                    'type' => 'textbox',
                                    'name' => 'services_category_permalink',
                                    'label' => __( 'Services Category Permalink', SH_NAME ),
                                    'description' => __( 'Enter Slug for Services Taxonomy.', SH_NAME ),
                                    'default' => '' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'testimonial_category_permalink',
                                    'label' => __( 'Testimonial Category Permalink', SH_NAME ),
                                    'description' => __( 'Enter Permalink for Testimonial Taxonomy.', SH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'catalog_category_permalink',
                                    'label' => __( 'Catalog Category Permalink', SH_NAME ),
                                    'description' => __( 'Enter Permalink for Catalog Taxonomy.', SH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'history_category_permalink',
                                    'label' => __( 'History Category Permalink', SH_NAME ),
                                    'description' => __( 'Enter Permalink for History Taxonomy.', SH_NAME ),
                                    'default' => '' 
                                ),
                                 
                            ) 
                        ) 
                    ) 
                ) //End of submenu
                
                
            ) 
        ),
        
		
		
		// Pages , Blog Pages Settings
        array(
             'title' => __( 'Page Settings', SH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-file',
            'menus' => array(
                
                // Search Page Settings 
                 array(
                     'title' => __( 'Search Page', SH_NAME ),
                    'name' => 'search_page_settings',
                    'icon' => 'font-awesome:fa fa-search',
                    'controls' => array(
                        
						array(
                            'type' => 'textbox',
                            'name' => 'search_page_header_title',
                            'label' => __( 'Serch page Title', SH_NAME ),
                            'description' => __( 'Enter the search page header title;', SH_NAME ),
                            'default' => '',
							
                         ),
						 array(
                            'type' => 'upload',
                            'name' => 'search_page_header_img',
                            'label' => __( 'Header Image', SH_NAME ),
                            'description' => __( 'choose the search page header image.', SH_NAME ),
                            'default' => '',
							
                         ),
						array(
                             'type' => 'select',
                            'name' => 'search_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'search_page_layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/1col.png' 
                                ) 
                                
                            ) 
                        ),
                    ) 
                ), // End of submenu
                
                // Archive Page Settings 
                array(
                     'title' => __( 'Archive Page', SH_NAME ),
                    'name' => 'archive_page_settings',
                    'icon' => 'font-awesome:fa fa-archive',
                    'controls' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'archive_page_header_title',
                            'label' => __( 'Archive page Title', SH_NAME ),
                            'description' => __( 'Enter the archive page header title;', SH_NAME ),
                            'default' => '',
							
                         ),
						 array(
                            'type' => 'upload',
                            'name' => 'archive_page_header_img',
                            'label' => __( 'Header Image', SH_NAME ),
                            'description' => __( 'choose the archive page header image.', SH_NAME ),
                            'default' => '',
							
                         ),
						array(
                             'type' => 'select',
                            'name' => 'archive_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'archive_page_layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/1col.png' 
                                ) 
                                
                            ) 
                        ) 
                        
                        
                    ) 
                ),
                
                // Author Page Settings 
                array(
                     'title' => __( 'Author Page', SH_NAME ),
                    'name' => 'author_page_settings',
                    'icon' => 'font-awesome:fa fa-user',
                    'controls' => array(
                        
						array(
                            'type' => 'textbox',
                            'name' => 'author_page_header_title',
                            'label' => __( 'Author page Title', SH_NAME ),
                            'description' => __( 'Enter the Author page header title;', SH_NAME ),
                            'default' => '',
							
                         ),
						 array(
                            'type' => 'upload',
                            'name' => 'author_page_header_img',
                            'label' => __( 'Header Image', SH_NAME ),
                            'description' => __( 'choose the author page header image.', SH_NAME ),
                            'default' => '',
							
                         ),
						array(
                             'type' => 'select',
                            'name' => 'author_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'author_page_layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/1col.png' 
                                ) 
                                
                            ) 
                        ) 
                        
                    ) 
                ),
                
            ) 
        ),
        
        // Sidebar Creator
        array(
             'title' => __( 'Sidebar Settings', SH_NAME ),
            'name' => 'sidebar-settings',
            'icon' => 'font-awesome:fa fa-bars',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Dynamic Sidebar', SH_NAME ),
                    'name' => 'dynamic_sidebar',
                    'description' => __( 'This section is used for theme color settings', SH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'sidebar_name',
                            'label' => __( 'Sidebar Name', SH_NAME ),
                            'description' => __( 'Choose the default color scheme for the theme.', SH_NAME ),
                            'default' => __( 'Dynamic Sidebar', SH_NAME ) 
                        ) 
                    ) 
                ) 
            ) 
        ),
        
        // Dynamic Social Media Creator
        array(
             'title' => __( 'Social Media ', SH_NAME ),
            'name' => 'social_media',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                
				 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', SH_NAME ),
                    'name' => 'social_media',
                    'description' => __( 'This section is used to add Social Media.', SH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', SH_NAME ),
                            'description' => __( 'Enter the title of the social media.', SH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', SH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', SH_NAME ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', SH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', SH_NAME ),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
                        )  
                    ) 
                ) 
            ) 
        ),
        
        
        /* Font settings */
        array(
             'title' => __( 'Font Settings', SH_NAME ),
            'name' => 'font_settings',
            'icon' => 'font-awesome:fa fa-font',
            'menus' => array(
                /** heading font settings */
                 array(
                     'title' => __( 'Heading Font', SH_NAME ),
                    'name' => 'heading_font_settings',
                    'icon' => 'font-awesome:fa fa-text-height',
                    
                    'controls' => array(
                        
                         array(
                             'type' => 'toggle',
                            'name' => 'use_custom_font',
                            'label' => __( 'Use Custom Font', SH_NAME ),
                            'description' => __( 'Use custom font or not', SH_NAME ),
                            'default' => 0 
                        ),
                        array(
                            'type' => 'section',
                            'title' => __( 'H1 Settings', SH_NAME ),
                            'name' => 'h1_settings',
                            'description' => __( 'heading 1 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h1_font_family',
                                    'description' => __( 'Select the font family to use for h1', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'h1_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'H2 Settings', SH_NAME ),
                            'name' => 'h2_settings',
                            'description' => __( 'heading h2 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h2_font_family',
                                    'description' => __( 'Select the font family to use for h2', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h2_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'H3 Settings', SH_NAME ),
                            'name' => 'h3_settings',
                            'description' => __( 'heading h3 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h3_font_family',
                                    'description' => __( 'Select the font family to use for h3', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h3_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h3', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H4 Settings', SH_NAME ),
                            'name' => 'h4_settings',
                            'description' => __( 'heading h4 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h4_font_family',
                                    'description' => __( 'Select the font family to use for h4', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h4_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h4', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H5 Settings', SH_NAME ),
                            'name' => 'h5_settings',
                            'description' => __( 'heading h5 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h5_font_family',
                                    'description' => __( 'Select the font family to use for h5', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h5_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h5', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H6 Settings', SH_NAME ),
                            'name' => 'h6_settings',
                            'description' => __( 'heading h6 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h6_font_family',
                                    'description' => __( 'Select the font family to use for h6', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h6_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h6', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ) 
                    ) 
                ),
                
                /** body font settings */
                array(
                     'title' => __( 'Body Font', SH_NAME ),
                    'name' => 'body_font_settings',
                    'icon' => 'font-awesome:fa fa-text-width',
                    'controls' => array(
                         array(
                             'type' => 'toggle',
                            'name' => 'body_custom_font',
                            'label' => __( 'Use Custom Font', SH_NAME ),
                            'description' => __( 'Use custom font or not', SH_NAME ),
                            'default' => 0 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'Body Font Settings', SH_NAME ),
                            'name' => 'body_font_settings1',
                            'description' => __( 'body font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'body_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'body_font_family',
                                    'description' => __( 'Select the font family to use for body', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'body_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading body', SH_NAME ),
                                    'default' => '#686868' 
                                ) 
                            ) 
                        ) 
                    ) 
                ) 
            ) 
        ), 
		 array(
             'title' => __( 'Clients', SH_NAME ),
            'name' => 'brand_or_client',
            'icon' => 'font-awesome:fa fa-star',
            'controls' => array(
                 array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Clients', SH_NAME ),
                    'name' => 'brand_or_client',
                    'description' => __( 'Add as many clients as you want', SH_NAME ),
                    'fields' => array(
						 
						 array(
							'type' => 'textbox',
							'name' => 'client_link',
							'label' => __( 'Client Link', SH_NAME ),
							'description' => __( 'Enter the client Link', SH_NAME ),
							'default' => ''
							 ),
						 array(
                           'type' => 'upload',
                            'name' => 'brand_img',
                            'label' => __( 'Logo', SH_NAME ),
                            'description' => __( 'choose the client logo.', SH_NAME ),
                            'default' => '' 
                         ),
						 
                    ) 
                ) 
            ) 
        ),
		
	) 
);
/**
 *EOF
 */