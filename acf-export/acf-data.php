<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_64942ce39e3b3',
    'title' => 'Modules',
    'fields' => array(
        array(
            'key' => 'field_64942ce8f43c9',
            'label' => 'Modules List',
            'name' => 'modules_list',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            
            'layouts' => array(
				'layout_651c373b76d1e' => array(
				'key' => 'layout_651c373b76d1e',
				'name' => 'faq_module',
				'label' => 'FAQ Module',
				'display' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_651c375af202f',
						'label' => 'Faq Repeater',
						'name' => 'faq_repeater',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 0,
						'max' => 0,
						'layout' => 'table',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_651c378af2030',
								'label' => 'Faq pytje',
								'name' => 'faq_pytje',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'delay' => 0,
							),
							array(
								'key' => 'field_651c379ef2031',
								'label' => 'Faq Pergjigje',
								'name' => 'faq_pergjigje',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'delay' => 0,
							),
						),
					),
				),
				'min' => '',
				'max' => '',
			),

                'layout_651eca4ec9006' => array(
					'key' => 'layout_651eca4ec9006',
					'name' => 'content_module',
					'label' => 'Content Module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_651eca5c82cf5',
							'label' => 'Postim',
							'name' => 'postim',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6522bd79ebd2c' => array(
					'key' => 'layout_6522bd79ebd2c',
					'name' => 'cards_module',
					'label' => 'Cards Module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6522bd97ebd2e',
							'label' => 'Cards',
							'name' => 'cards',
							'aria-label' => '',
							'type' => 'relationship',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'post_type' => array(
								0 => 'banesa',
								1 => 'apartmenti',
							),
							'post_status' => '',
							'taxonomy' => '',
							'filters' => array(
								0 => 'post_type',
							),
							'return_format' => 'object',
							'min' => '',
							'max' => '',
							'elements' => '',
							'bidirectional' => 0,
							'bidirectional_target' => array(
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_652655548fba4' => array(
					'key' => 'layout_652655548fba4',
					'name' => 'image_module',
					'label' => 'Image module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6526555aa9695',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				// ketu e gjeneroni kodin e ACF

            ),

            // end
            'button_label' => 'Add Module',
            'min' => '',
            'max' => '',
        ),
    ),
    'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '!=',     
				'value' => 'page',      
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '!=',     
				'value' => 'house',      
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '!=',  
				'value' => 'aparment',      
			),
		),
		
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));
endif;