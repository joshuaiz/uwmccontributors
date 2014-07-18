<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'uwmc_resources_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'uwmc_resources',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => 'Resources',

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'post', 'page' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// List of meta fields

	'fields' => array(
		// WYSIWYG/RICH TEXT EDITOR
		array(
			'name' => '',
			'id'   => "{$prefix}wysiwyg",
			'type' => 'wysiwyg',
			'std'  => '',
			'desc' => 'Enter the resources for this Post or Page. This may include links, contact info, or downloadable files. For files, upload the file using the "Add Media" button and include a file download button with a glyph for the file type like this: <xmp><button class="btn-primary"><span class="icon-file-pdf"></span>Download File</button></xmp>.',

			// Editor settings, see wp_editor() function: look4wp.com/wp_editor
			'options' => array(
				'textarea_rows' => 8,
				'teeny'         => true,
				'media_buttons' => true,
				'editor_class'	=> 'uwmc-resources',
			),
		),
	)
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function uwmc_resources_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'uwmc_resources_register_meta_boxes' );