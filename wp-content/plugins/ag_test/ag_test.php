<?php
/**
 * Plugin Name:       Ag Test
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Matei Mircea
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ag_test
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function create_block_ag_test_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_ag_test_block_init' );
