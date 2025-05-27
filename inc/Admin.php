<?php
/**
 * Admin class.
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 */

namespace NonProfitFSE;

/**
 * Admin class.
 */
class Admin {

	/**
	 * WP Full Pay reference key.
	 *
	 * @var string
	 */
	const WPFP_REF = 'wpfp_reference_key';

	/**
	 * Admin constructor.
	 */
	public function __construct() {
		$this->setup_admin_hooks();
		$this->add_install_time();
	}

	/**
	 * Add the installation time.
	 * This is needed here while the SDK is not available.
	 * Once the SDK is available, this can safely be removed.
	 *
	 * @return void
	 */
	private function add_install_time() {
		$install = get_option( Constants::PRODUCT_KEY . '_install', 0 );
		if ( 0 === $install ) {
			update_option( Constants::PRODUCT_KEY . '_install', time() );
		}
	}


	/**
	 * Setup admin hooks.
	 *
	 * @return void
	 */
	public function setup_admin_hooks() {
		add_action( 'admin_notices', array( $this, 'render_welcome_notice' ), 0 );

		add_action( 'activated_plugin', array( $this, 'after_wpfs_activation' ) );
		add_action( 'wp_ajax_non_profit_fse_dismiss_welcome_notice', array( $this, 'remove_welcome_notice' ) );
		add_action( 'wp_ajax_non_profit_fse_set_wpfp_ref', array( $this, 'set_wpfp_ref' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'register_internal_page' ) );
		add_filter( 'themeisle_sdk_blackfriday_data', array( $this, 'add_black_friday_data' ) );
	}

	/**
	 * Render the welcome notice.
	 *
	 * @return void
	 */
	public function render_welcome_notice() {
		if ( ! $this->should_show_welcome_notice() ) {
			return;
		}

		$wpfp_status = $this->get_wpfp_status();

		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['welcome-notice'], 'welcome-notice' );
		Assets_Manager::enqueue_script(
			Assets_Manager::ASSETS_SLUGS['welcome-notice'],
			'welcome-notice',
			true,
			array(),
			array(
				'nonce'         => wp_create_nonce( 'non-profit-fse-dismiss-welcome-notice' ),
				'wpfpRefNonce'  => wp_create_nonce( 'non-profit-fse-set-wpfp-ref' ),
				'ajaxUrl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
				'wpfpStatus'    => $wpfp_status,
				'activationUrl' => esc_url(
					add_query_arg(
						array(
							'plugin_status' => 'all',
							'paged'         => '1',
							'action'        => 'activate',
							'plugin'        => rawurlencode( 'wp-full-stripe-free/wp-full-stripe.php' ),
							'_wpnonce'      => wp_create_nonce( 'activate-plugin_wp-full-stripe-free/wp-full-stripe.php' ),
						),
						admin_url( 'plugins.php' )
					)
				),
				'redirectUrl'   => esc_url( admin_url( 'admin.php?page=wpfs-settings-stripe&onboarding=true' ) ),
				'activating'    => __( 'Activating', 'non-profit-fse' ) . '&hellip;',
				'installing'    => __( 'Installing', 'non-profit-fse' ) . '&hellip;',
				'done'          => __( 'Done', 'non-profit-fse' ),
			)
		);

		$notice_html  = '<div class="notice notice-info non-profit-fse-welcome-notice">';
		$notice_html .= '<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>';
		$notice_html .= '<div class="notice-content">';

		$notice_html .= '<div class="notice-copy">';

		$notice_html .= '<h2 class="notice-subtitle">';
		$notice_html .= '<span class="dashicons dashicons-star-filled"></span>';
		/* translators: %s: 🎉 emoji */
		$notice_html .= sprintf( __( 'Accept Donations on Your Non-Profit Site %s', 'non-profit-fse' ), '🎉' );
		$notice_html .= '</h2>';

		$notice_html .= '<h1 class="notice-title">';
		/* translators: %s: WP Full Pay */
		$notice_html .= sprintf( __( 'Start Collecting Funds with %s!', 'non-profit-fse' ), '<span>WP Full Pay</span>' );

		$notice_html .= '</h1>';

		$notice_html .= '<p class="description">' . __( 'The simplest way to accept donations and payments on your WordPress site. Set up in minutes with no technical knowledge required.', 'non-profit-fse' ) . '</p>';
		$notice_html .= '<p class="description"><span class="dashicons dashicons-yes"></span><strong>' . __( 'Quick setup', 'non-profit-fse' ) . '</strong> - ' . __( 'Connect to Stripe and create your first donation form in minutes', 'non-profit-fse' ) . '</p>';
		$notice_html .= '<p class="description"><span class="dashicons dashicons-yes"></span><strong>' . __( 'Multiple payment options', 'non-profit-fse' ) . '</strong> - ' . __( 'One-time and recurring donations with customizable amounts', 'non-profit-fse' ) . '</p>';

		$notice_html .= '<div class="actions">';

		/* translators: %s: WP Full Pay */
		$notice_html .= '<button id="non-profit-fse-install-wpfp" class="button button-primary button-hero">';
		$notice_html .= '<span class="dashicons dashicons-update hidden"></span>';
		$notice_html .= '<span class="text">';
		$notice_html .= 'installed' === $wpfp_status ?
			/* translators: %s: WP Full Pay */
			sprintf( __( 'Activate %s', 'non-profit-fse' ), 'WP Full Pay' ) :
			/* translators: %s: WP Full Pay */
			sprintf( __( 'Install & Activate %s', 'non-profit-fse' ), 'WP Full Pay' );
		$notice_html .= '</span>';
		$notice_html .= '</button>';

		$notice_html .= '<a href="https://wordpress.org/plugins/wp-full-stripe-free/" target="_blank" class="button button-secondary button-hero">';
		$notice_html .= '<span>' . __( 'Learn More', 'non-profit-fse' ) . '</span>';
		$notice_html .= '<span class="dashicons dashicons-external"></span>';
		$notice_html .= '</a>';

		$notice_html .= '</div>';

		$notice_html .= '</div>';

		$notice_html .= '<img class="wpfp-preview" src="' . esc_url( Assets_Manager::get_image_url( 'welcome-notice.png' ) ) . '" alt="' . esc_attr__( 'WP Full Pay preview', 'non-profit-fse' ) . '"/>';
		$notice_html .= '</div>';
		$notice_html .= '</div>';

		echo wp_kses_post( $notice_html );

	}

	/**
	 * Dismiss the welcome notice.
	 *
	 * @return void
	 */
	public function remove_welcome_notice() {
		if ( ! isset( $_POST['nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'non-profit-fse-dismiss-welcome-notice' ) ) {
			return;
		}
		update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );
		wp_die();
	}

	/**
	 * Should we show the welcome notice?
	 *
	 * @return bool
	 */
	private function should_show_welcome_notice(): bool {
		// Already using WPFP.
		if ( is_plugin_active( 'wp-full-stripe-free/wp-full-stripe.php' ) ) {
			return false;
		}

		// Notice was dismissed.
		if ( get_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'no' ) === 'yes' ) {
			return false;
		}

		$screen = get_current_screen();

		// Only show in dashboard/themes.
		if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ) ) ) {
			return false;
		}

		// AJAX actions.
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return false;
		}

		// Don't show in network admin.
		if ( is_network_admin() ) {
			return false;
		}

		// User can't dismiss. We don't show it.
		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		// User can't install plugins. We don't show it.
		if ( ! current_user_can( 'install_plugins' ) ) {
			return false;
		}

		// Block editor context.
		if ( $screen->is_block_editor() ) {
			return false;
		}

		// Dismiss after one week from activation.
		$activated_time = get_option( 'non_profit_fse_install' );

		if ( ! empty( $activated_time ) && time() - intval( $activated_time ) > WEEK_IN_SECONDS ) {
			update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );

			return false;
		}

		return true;
	}

	/**
	 * Get the WP Full Pay plugin status.
	 *
	 * @return string
	 */
	private function get_wpfp_status(): string {
		$status = 'not-installed';

		if ( is_plugin_active( 'wp-full-stripe-free/wp-full-stripe.php' ) ) {
			return 'active';
		}

		if ( file_exists( ABSPATH . 'wp-content/plugins/wp-full-stripe-free/wp-full-stripe.php' ) ) {
			return 'installed';
		}

		return $status;
	}

	/**
	 * Run after WP Full Pay activation.
	 *
	 * @param string $plugin Plugin name.
	 *
	 * @return void
	 */
	public function after_wpfs_activation( $plugin ) {
		if ( 'wp-full-stripe-free/wp-full-stripe.php' !== $plugin ) {
			return;
		}

		update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );
		exit;
	}

	/**
	 * Update WP Full Pay reference key.
	 *
	 * @return void
	 */
	public function set_wpfp_ref() {
		if ( empty( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'non-profit-fse-set-wpfp-ref' ) ) {
			return;
		}

		update_option( self::WPFP_REF, 'non-profit-fse' );

		wp_send_json_success();
	}

	/**
	 * Add Black Friday data.
	 *
	 * @param array $configs The configuration array for the loaded products.
	 *
	 * @return array
	 */
	public function add_black_friday_data( $configs ) {
		$config = $configs['default'];

		// translators: %1$s - plugin name, %2$s - HTML tag, %3$s - discount.
		$message_template = __( 'Need to accept payments or donations? Try %1$s, built by the same team as your theme — now up to %2$s OFF, for a limited time only.', 'non-profit-fse' );

		$config['dismiss']  = true; // Note: Allow dismiss since it appears on `/wp-admin`.
		$config['message']  = sprintf( $message_template, 'WP Full Pay', '70%' );
		$config['sale_url'] = add_query_arg(
			array(
				'utm_term' => 'free',
			),
			tsdk_translate_link( tsdk_utmify( 'https://themeisle.link/wpfp-bf', 'bfcm', 'non-profit-fse' ) )
		);

		$configs[ NON_PROFIT_FSE_PRODUCT_SLUG ] = $config;

		return $configs;
	}

	/**
	 * Register internal pages.
	 *
	 * @return void
	 */
	public function register_internal_page() {
		$screen = get_current_screen();
		
		if ( ( 'dashboard' !== $screen->id && 'themes' !== $screen->id ) ) {
			return;
		}
		
		do_action( 'themeisle_internal_page', NON_PROFIT_FSE_PRODUCT_SLUG, $screen->id );
	}
}
