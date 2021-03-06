<?php if( function_exists('acf_add_local_field_group') ):

	/*--------------------------------------------------------------
	# Layouts
	--------------------------------------------------------------*/
	acf_add_local_field_group(array (
		'key' => 'group_strt_layouts',
		'title' => 'Layouts',
		'fields' => array (
			array (
				'layouts' => array (

					/*--------------------------------------------------------------
					# Columns
					--------------------------------------------------------------*/
					array (
						'key' => 'strt_columns',
						'name' => 'columns',
						'label' => 'Columns',
						'display' => 'block',
						'sub_fields' => array (
							array (
								'placement' => 'left',
								'endpoint' => 0,
								'key' => 'field_tab_content',
								'label' => 'Content',
								'name' => '',
								'type' => 'tab',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'default_value' => '',
								'delay' => 0,
								'key' => 'field_col_1',
								'label' => 'Column 1',
								'name' => 'col_1',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'default_value' => '',
								'delay' => 0,
								'key' => 'field_col_2',
								'label' => 'Column 2',
								'name' => 'col_2',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'cols-2',
										),
									),
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'cols-3',
										),
									),
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'cols-4',
										),
									),
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'left-wide',
										),
									),
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'right-wide',
										),
									),
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'default_value' => '',
								'delay' => 0,
								'key' => 'field_col_3',
								'label' => 'Column 3',
								'name' => 'col_3',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'cols-3',
										),
									),
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'cols-4',
										),
									),
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'default_value' => '',
								'delay' => 0,
								'key' => 'field_col_4',
								'label' => 'Column 4',
								'name' => 'col_4',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_column_type',
											'operator' => '==',
											'value' => 'cols-4',
										),
									),
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'placement' => 'left',
								'endpoint' => 0,
								'key' => 'field_tab_options',
								'label' => 'Options',
								'name' => '',
								'type' => 'tab',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'multiple' => 0,
								'allow_null' => 0,
								'choices' => array (
									'cols-1' => '1 Column',
									'cols-1-small' => '1 Column Small',
									'cols-2' => '2 Columns',
									'cols-3' => '3 Columns',
									'cols-4' => '4 Columns',
									'left-wide' => 'Left Wide',
									'right-wide' => 'Right Wide',
								),
								'default_value' => array (
									0 => 'cols-2',
								),
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
								'return_format' => 'value',
								'key' => 'field_column_type',
								'label' => 'Column Type',
								'name' => 'column_type',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'multiple' => 0,
								'allow_null' => 0,
								'choices' => array (
									'standard' => 'Standard',
									'stretched' => 'Stretched',
								),
								'default_value' => array (
									0 => 'standard',
								),
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
								'return_format' => 'value',
								'key' => 'field_row_layout',
								'label' => 'Row Layout',
								'name' => 'row_layout',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'key' => 'field_row_class',
								'label' => 'Row Class',
								'name' => 'row_class',
								'type' => 'text',
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'key' => 'field_row_id',
								'label' => 'Row ID',
								'name' => 'row_id',
								'type' => 'text',
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'padded' => 'Padded',
									'center' => 'Center',
									'verticalcenter' => 'Vertical center',
								),
								'default_value' => array (
								),
								'allow_custom' => 0,
								'save_custom' => 0,
								'toggle' => 0,
								'return_format' => 'value',
								'key' => 'field_row_options',
								'label' => 'Row Options',
								'name' => 'row_options',
								'type' => 'checkbox',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
							array (
								'return_format' => 'url',
								'preview_size' => 'thumbnail',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
								'key' => 'field_row_image',
								'label' => 'Background Image',
								'name' => 'row_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
							),
						),
						'min' => '',
						'max' => '',
					),

					/*--------------------------------------------------------------
					# End 
					--------------------------------------------------------------*/
				),
				'min' => '',
				'max' => '',
				'button_label' => 'Add Layout',
				'key' => 'field_strt_layouts',
				'label' => 'Layouts',
				'name' => 'layouts',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'custom_fields',
			4 => 'discussion',
			5 => 'comments',
			6 => 'revisions',
			7 => 'slug',
			8 => 'author',
			9 => 'format',
			10 => 'page_attributes',
			11 => 'featured_image',
			12 => 'categories',
			13 => 'tags',
			14 => 'send-trackbacks',
		),
		'active' => 1,
		'description' => '',
	));
	
	endif;