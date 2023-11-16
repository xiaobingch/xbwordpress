<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {


	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( '作者名称', 'theme-textdomain' ),
		'desc' => __( '作者的昵称或网名，用于侧边栏显示', 'theme-textdomain' ),
		'id' => 'xbuser_name',
		'std' => '会显示在侧边栏',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '作者邮箱', 'theme-textdomain' ),
		'desc' => __( '作者的邮箱，用于侧边栏显示', 'theme-textdomain' ),
		'id' => 'xbuser_email',
		'std' => '会显示在侧边栏',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '作者网址', 'theme-textdomain' ),
		'desc' => __( '作者的网址，用于侧边栏显示', 'theme-textdomain' ),
		'id' => 'xbuser_url',
		'std' => '会显示在侧边栏',
		'type' => 'text'
	);

	

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Default Text Editor', 'theme-textdomain' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'theme-textdomain' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}