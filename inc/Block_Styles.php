<?php
/**
 * Block Styles Handler.
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 */

namespace NonProfitFSE;

/**
 * Class Block_Styles
 *
 * @package non-profit-fse
 */
class Block_Styles {
	/**
	 * Block styles.
	 *
	 * @var \array[][] | void
	 */
	private $styles;

	/**
	 * Block Styles constructor.
	 */
	public function __construct() {
		$this->styles = array();

		add_action( 'init', array( $this, 'add_block_styles' ) );
	}

	/**
	 * Add the block styles.
	 *
	 * @return void
	 */
	public function add_block_styles() {
		foreach ( $this->styles as $block => $styles ) {
			foreach ( $styles as $block_style ) {
				register_block_style( $block, $block_style );
			}
		}
	}
}
