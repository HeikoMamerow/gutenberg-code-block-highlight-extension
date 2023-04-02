<?php
/**
 * Plugin Name:     Gutenberg Code Block Highlight Extension
 * Plugin URI:      https://github.com/HeikoMamerow/gutenberg-code-block-highlight-extension
 * Description:     Extends the origin Gutenberg Code Block with syntax highlighting.
 * Author:          Heiko Mamerow
 * Author URI:      https://heikomamerow.dev
 * Text Domain:     gutenberg-code-block-highlight-extension
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Gutenberg_Code_Block_Highlight_Extension
 */


namespace Gutenberg_Code_Block_Highlight_Extension;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
};

function frontend_assets() {

	wp_enqueue_style(
		'intro-to-block-filters-frontend-default-style',
		plugin_dir_url( __FILE__ ) . 'assets/prism.css',
		[],
		'0.1.0'
	);
	wp_enqueue_script(
		'intro-to-block-filters-editor-highlight-script',
		plugin_dir_url( __FILE__ ) . 'assets/prism.js',
		[],
		'0.1.0',
		true
	);
	wp_script_add_data( 'intro-to-block-filters-editor-highlight-script', 'async', true );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\frontend_assets' );

//function editor_assets() {
//	wp_enqueue_script(
//		'intro-to-block-filters-editor-script',
//		plugin_dir_url( __FILE__ ) . 'build/index.js',
//		[ 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ],
//		'0.1.0'
//	);
//}
//
//add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\editor_assets' );