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
}