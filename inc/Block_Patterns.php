<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package nonprofit-fse
 * @since 1.0.0
 */

namespace NonprofitFSE;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package nonprofit-fse
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'nonprofit-fse'         => array(
				'label'       => __( 'Nonprofit FSE Patterns', 'nonprofit-fse' ),
				'description' => __( 'Patterns for several sections and components', 'nonprofit-fse' ),
			),
			'nonprofit-fse-layouts' => array(
				'label'       => __( 'Nonprofit FSE Layouts', 'nonprofit-fse' ),
				'description' => __( 'Full-page layouts that can be used as templates', 'nonprofit-fse' ),
			),
		);

		$patterns = array(
			// layout templates patterns.
			'templates/single-post-cover-boxed',
			'templates/single-post-cover',
			'templates/archive-cover',
			'templates/archive-list',

			// layout patterns.
			'layout/campaign',
			'layout/content',
			'layout/content-2',
			'layout/content-3',
			'layout/content-4',
			'layout/CTA',
			'layout/events',
			'layout/events-2',
			'layout/faq',
			'layout/features',
			'layout/features-2',
			'layout/hero',
			'layout/stats',
			'layout/testimonials',
			'layout/testimonials-2',

			// Post patterns.
			'loops/post-loop-1',
			'loops/post-loop-2',

			// Page title patterns.
			'page_titles/page-title-1',
			'page_titles/page-title-2',
			'page_titles/page-title-3',
			'page_titles/page-title-4',
		);

		$this->categories = apply_filters( 'nonprofit_fse_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'nonprofit_fse_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = NONPROFIT_FSE_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'nonprofit-fse/' . $pattern, require $file );
		}
	}
}
