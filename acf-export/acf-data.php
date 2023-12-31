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
				'layout_6537711750d1d' => array(
					'key' => 'layout_6537711750d1d',
					'name' => 'faq_module',
					'label' => 'Faq Module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_65377123aa93b',
							'label' => 'Section Title',
							'name' => 'section_title',
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
							'key' => 'field_6537715caa93c',
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
									'key' => 'field_6537717faa93d',
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
									'key' => 'field_6537718faa93e',
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
				
				'layout_64b105c645e48' => array(
					'key' => 'layout_64b105c645e48',
					'name' => 'banner_section',
					'label' => 'Banner Section',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_64b105e6ccbf2',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_64b1060eccbf3',
							'label' => 'Description',
							'name' => 'description',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_64b1061cccbf4',
							'label' => 'Photo',
							'name' => 'photo',
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
				
				'layout_6522bd79ebd2c' => array(
					'key' => 'layout_6522bd79ebd2c',
					'name' => 'cards_module',
					'label' => 'Cards Module',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_6536bb1b275d4',
							'label' => 'description',
							'name' => 'description',
							'aria-label' => '',
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
							'key' => 'field_65257d58b196b',
							'label' => 'Row Cards Desktop',
							'name' => 'row_cards_desktop',
							'aria-label' => '',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 2,
							'min' => 1,
							'max' => 4,
							'placeholder' => '',
							'step' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_65257dffb196c',
							'label' => 'Row Cards Tablet',
							'name' => 'row_cards_tablet',
							'aria-label' => '',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 1,
							'min' => 1,
							'max' => 3,
							'placeholder' => '',
							'step' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_65257e2bb196d',
							'label' => 'Row Cards Mobile',
							'name' => 'row_cards_mobile',
							'aria-label' => '',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 1,
							'min' => 1,
							'max' => 2,
							'placeholder' => '',
							'step' => '',
							'prepend' => '',
							'append' => '',
						),
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
								0 => 'apartment',
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
				'layout_653784586c50a' => array(
					'key' => 'layout_653784586c50a',
					'name' => 'image_module',
					'label' => 'Image module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6537846e4a4c9',
							'label' => 'Title',
							'name' => 'title',
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
							'key' => 'field_653784ca4a4ca',
							'label' => 'Image',
							'name' => 'image',
							'aria-label' => '',
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
				
				'layout_653b54c5c7c84' => array(
					'key' => 'layout_653b54c5c7c84',
					'name' => 'carousel_module',
					'label' => 'Carousel Module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654e53a896631',
							'label' => 'title',
							'name' => 'title',
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
							'key' => 'field_653b54ca88a1f',
							'label' => 'Image Gallery',
							'name' => 'image_gallery',
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
									'key' => 'field_653b54ec88a20',
									'label' => 'Image',
									'name' => 'image',
									'type' => 'gallery',
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
									'insert' => 'append',
									'library' => 'all',
									'min' => '',
									'max' => '',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				
				// ketu e gjeneroni kodin e ACF
				'layout_64937496af6bc' => array(
					'key' => 'layout_64937496af6bc',
					'name' => 'pro_cons',
					'label' => 'ProCons Module',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_649fe33e2d926',
							'label' => 'Columns (copy)',
							'name' => 'columns_copy',
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
									'key' => 'field_649fe33f2d927',
									'label' => 'Content',
									'name' => 'content',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => '',
								),
							),
						),
						array(
							'key' => 'field_64a334cf4368f',
							'label' => 'Columns cons',
							'name' => 'columns_cons',
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
									'key' => 'field_64a334cf43690',
									'label' => 'Contenti',
									'name' => 'contenti',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
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

	

	)
	
);
endif;