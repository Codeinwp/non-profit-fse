<?php
/**
 * Class Test_Loading
 *
 * @package nonprofit-fse
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'NONPROFIT_FSE_VERSION' ) );
		$this->assertTrue( defined( 'NONPROFIT_FSE_DEBUG' ) );
		$this->assertTrue( defined( 'NONPROFIT_FSE_DIR' ) );
		$this->assertTrue( defined( 'NONPROFIT_FSE_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( NONPROFIT_FSE_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'NonprofitFSE\Core', false ) );
	}
}