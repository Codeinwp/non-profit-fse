<?php
/**
 * Tests for inherited theme styles.
 *
 * @package non-profit-fse
 */

use NonProfitFSE\Assets_Manager;
use NonProfitFSE\Neve_Mods;

/**
 * Test inherited style output.
 */
class Test_Assets_Manager extends WP_UnitTestCase {
	/**
	 * Restore the inherited-mod cache after each test.
	 *
	 * @return void
	 */
	public function tearDown() {
		Neve_Mods::$instance = null;
		delete_option( 'theme_mods_neve' );
		wp_dequeue_style( 'non-profit-fse-test-style' );
		wp_deregister_style( 'non-profit-fse-test-style' );

		parent::tearDown();
	}

	/**
	 * Inherited values should not add markup to an inline style block.
	 *
	 * @return void
	 */
	public function test_inherited_style_values_strip_markup() {
		update_option(
			'theme_mods_neve',
			array(
				'neve_typeface_general' => array(
					'fontWeight' => '<em>700</em>',
				),
			)
		);

		Neve_Mods::$instance = null;
		Assets_Manager::enqueue_style( 'non-profit-fse-test-style', 'style' );

		$inline_styles = wp_styles()->get_data( 'non-profit-fse-test-style', 'after' );
		$inline_style  = implode( "\n", $inline_styles );

		$this->assertStringContainsString( '--neve-font-weight-body:700;', $inline_style );
		$this->assertStringNotContainsString( '<em>', $inline_style );
		$this->assertStringNotContainsString( '</em>', $inline_style );
	}
}
