<?php
/**
 * Class Test_Loading
 *
 * @package non-profit-fse
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'NON_PROFIT_FSE_VERSION' ) );
		$this->assertTrue( defined( 'NON_PROFIT_FSE_DEBUG' ) );
		$this->assertTrue( defined( 'NON_PROFIT_FSE_DIR' ) );
		$this->assertTrue( defined( 'NON_PROFIT_FSE_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( NON_PROFIT_FSE_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'NonProfitFSE\Core', false ) );
	}

	/**
	 * The static front-page template must render the selected page's content.
	 *
	 * @return void
	 */
	public function testFrontPageRendersSelectedPageContent() {
		$template = file_get_contents( get_template_directory() . '/templates/front-page.html' );
		$blocks   = parse_blocks( $template );

		$this->assertTrue( $this->containsBlock( $blocks, 'core/post-content' ) );
	}

	/**
	 * Check a parsed block tree for a block name.
	 *
	 * @param array  $blocks     Parsed blocks.
	 * @param string $block_name Block name to find.
	 * @return bool
	 */
	private function containsBlock( $blocks, $block_name ) {
		foreach ( $blocks as $block ) {
			if ( isset( $block['blockName'] ) && $block_name === $block['blockName'] ) {
				return true;
			}

			if ( ! empty( $block['innerBlocks'] ) && $this->containsBlock( $block['innerBlocks'], $block_name ) ) {
				return true;
			}
		}

		return false;
	}
}
