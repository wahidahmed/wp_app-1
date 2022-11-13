<?php
/**
 * PA Elements.
 */

use PremiumAddons\Includes\Helper_Functions;

$prefix = Helper_Functions::get_prefix();

$elements = array(
	'cat-1'  => array(
		'icon'     => 'all',
		'title'    => __( 'All Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'      => 'premium-lottie-widget',
				'name'     => 'premium-lottie',
				'title'    => __( 'Lottie Animations', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-lottie-animations-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/lottie-animations-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=0QWzUpF57dw',
			),
			array(
				'key'      => 'premium-carousel',
				'name'     => 'premium-carousel-widget',
				'title'    => __( 'Carousel', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/carousel-widget-for-elementor-page-builder', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/carousel/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=ZMgprLKvq24',
			),
			array(
				'key'   => 'premium-blog',
				'name'  => 'premium-addon-blog',
				'title' => __( 'Blog', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/blog-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/blog/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-nav-menu',
				'name'  => 'premium-nav-menu',
				'title' => __( 'Nav/Mega Menu', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-mega-menu-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/elementor-mega-menu-widget-tutorial', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'      => 'premium-maps',
				'name'     => 'premium-addon-maps',
				'title'    => __( 'Google Maps', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-maps-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/google-maps/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=z4taEeCY77Q',
			),
			array(
				'key'   => 'premium-person',
				'name'  => 'premium-addon-person',
				'title' => __( 'Team Members', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/persons-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/persons-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-tabs',
				'name'       => 'premium-addon-tabs',
				'title'      => __( 'Tabs', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-tabs-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/tabs-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-tabs',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-tabs-widget/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-content-toggle',
				'name'       => 'premium-addon-content-toggle',
				'title'      => __( 'Content Switcher', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/content-switcher-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-content-switcher/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-content-switcher',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/content-switcher-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'premium-fancytext',
				'name'  => 'premium-addon-fancy-text',
				'title' => __( 'Fancy Text', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/fancy-text-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/fancy-text-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-title',
				'name'  => 'premium-addon-title',
				'title' => __( 'Heading', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/heading-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/heading-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-dual-header',
				'name'  => 'premium-addon-dual-header',
				'title' => __( 'Dual Heading', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/dual-header-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/dual-heading-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-divider',
				'name'       => 'premium-divider',
				'title'      => __( 'Divider', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/divider-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/divider-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-separator',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/divider-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'premium-grid',
				'name'  => 'premium-img-gallery',
				'title' => __( 'Media Grid', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/grid-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/grid/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-image-scroll',
				'name'  => 'premium-image-scroll',
				'title' => __( 'Image Scroll', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-scroll-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-scroll-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-image-separator',
				'name'  => 'premium-addon-image-separator',
				'title' => __( 'Image Separator', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-separator-widget-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-separator-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-image-comparison',
				'name'       => 'premium-addon-image-comparison',
				'title'      => __( 'Image Comparison', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-comparison-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-image-comparison-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-image-comparison',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-comparison-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-image-hotspots',
				'name'       => 'premium-addon-image-hotspots',
				'title'      => __( 'Image Hotspots', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-hotspots-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-hotspots-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-hot-spot',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-hotspots-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-img-layers',
				'name'       => 'premium-img-layers-addon',
				'title'      => __( 'Image Layers', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-layers-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/image-layers/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=D3INxWw_jKI',
				'is_pro'     => true,
				'icon'       => 'pa-pro-image-layers',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-layers-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-image-accordion',
				'name'       => 'premium-image-accordion',
				'title'      => __( 'Image Accordion', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-accordion-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-accordion-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-image-accordion',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-accordion-widget/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'premium-videobox',
				'name'  => 'premium-addon-video-box',
				'title' => __( 'Video Box', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/video-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/video-box/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-hscroll',
				'name'       => 'premium-hscroll',
				'title'      => __( 'Horizontal Scroll', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-horizontal-scroll-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/horizontal-scroll/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=4HqT_3s-ZXg',
				'is_pro'     => true,
				'icon'       => 'pa-pro-horizontal-scroll',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-horizontal-scroll-widget/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'      => 'premium-vscroll',
				'name'     => 'premium-vscroll',
				'title'    => __( 'Vertical Scroll', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/vertical-scroll-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/vertical-scroll-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=MuLaIn1QXfQ',
			),
			array(
				'key'        => 'premium-color-transition',
				'name'       => 'premium-color-transition',
				'title'      => __( 'Background Transition', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-background-transition-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/background-transition-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-color-transition',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-background-transition-widget/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-multi-scroll',
				'name'       => 'premium-multi-scroll',
				'title'      => __( 'Multi Scroll', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/multi-scroll-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/multi-scroll-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=IzYnD6oDYXw',
				'is_pro'     => true,
				'icon'       => 'pa-pro-multi-scroll',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/multi-scroll-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'       => 'premium-lottie',
				'title'     => __( 'Lottie Animations', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-lottie-animations-section-addon/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/lottie-background/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=KVrenWNEdkY',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-parallax',
				'title'     => __( 'Parallax', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/parallax-section-addon-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/parallax-section-addon-tutorial-2/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=hkMNjxLoZ2w',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-particles',
				'title'     => __( 'Particles', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/particles-section-addon-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/particles/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=bPmWKv4VWrI',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-gradient',
				'title'     => __( 'Animated Gradient', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/animated-section-gradients-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/animated-gradient-section-addon-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=IL4USvwR6K4',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-kenburns',
				'title'     => __( 'Animated Ken Burns', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/ken-burns-section-addon-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/ken-burns-section-addon-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=DUNFjWphZfs',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-blob',
				'title'     => __( 'Blob Generator', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-animated-blob-generator/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'      => 'premium-modalbox',
				'name'     => 'premium-addon-modal-box',
				'title'    => __( 'Modal Box', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/modal-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/modal-box/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=3lLxSyf2nyk',
			),
			array(
				'key'        => 'premium-notbar',
				'name'       => 'premium-notbar',
				'title'      => __( 'Alert Box', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/alert-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/alert-box-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-notification-bar',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/alert-box-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-magic-section',
				'name'       => 'premium-addon-magic-section',
				'title'      => __( 'Magic Section', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/magic-section-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/magic-section-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-magic-section',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/magic-section-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-prev-img',
				'name'       => 'premium-addon-preview-image',
				'title'      => __( 'Preview Window', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/preview-window-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/preview-window-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=EmptjFjrc4E',
				'is_pro'     => true,
				'icon'       => 'pa-pro-preview-window',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/preview-window-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'premium-testimonials',
				'name'  => 'premium-addon-testimonials',
				'title' => __( 'Testimonials', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/testimonials-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/testimonials-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-facebook-reviews',
				'name'       => 'premium-facebook-reviews',
				'title'      => __( 'Facebook Reviews', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/facebook-reviews-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/facebook-reviews/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=zl-OFo3IFd8',
				'is_pro'     => true,
				'icon'       => 'pa-pro-facebook-reviews',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/facebook-reviews-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-google-reviews',
				'name'       => 'premium-google-reviews',
				'title'      => __( 'Google Reviews', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-reviews-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/google-reviews/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=Z0EeGyD34Zk',
				'is_pro'     => true,
				'icon'       => 'pa-pro-google-reviews',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-reviews-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-yelp-reviews',
				'name'       => 'premium-yelp-reviews',
				'title'      => __( 'Yelp Reviews', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-yelp-reviews-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/yelp-reviews/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=5T-MveVFvns',
				'is_pro'     => true,
				'icon'       => 'pa-pro-yelp-reviews',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-yelp-reviews-widget/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'premium-countdown',
				'name'  => 'premium-countdown-timer',
				'title' => __( 'Countdown', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/countdown-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/countdown-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-banner',
				'name'  => 'premium-addon-banner',
				'title' => __( 'Banner', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/banner-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-banner-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'      => 'premium-button',
				'name'     => 'premium-addon-button',
				'title'    => __( 'Button', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/button-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/button/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=w4NuCUkCIV4',
			),
			array(
				'key'   => 'premium-image-button',
				'name'  => 'premium-addon-image-button',
				'title' => __( 'Image Button', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-button-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/image-button/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-flipbox',
				'name'       => 'premium-addon-flip-box',
				'title'      => __( '3D Hover Box', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/3d-hover-box-flip-box-widget-for-elementor/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/flip-box-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-flip-box',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/3d-hover-box-flip-box-widget-for-elementor/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-iconbox',
				'name'       => 'premium-addon-icon-box',
				'title'      => __( 'Icon Box', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/icon-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/icon-box-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-icon-box',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/icon-box-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-ihover',
				'name'       => 'premium-ihover',
				'title'      => __( 'iHover', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/ihover-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-ihover-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-ihover',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/ihover-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-unfold',
				'name'       => 'premium-unfold-addon',
				'title'      => __( 'Unfold', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/unfold-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-unfold-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-unfold',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/unfold-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'      => 'premium-icon-list',
				'name'     => 'premium-icon-list',
				'title'    => __( 'Bullet List', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-bullet-list-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/bullet-list-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=MPeXJiZ14sI',
			),
			array(
				'key'        => 'premium-facebook-feed',
				'name'       => 'premium-facebook-feed',
				'title'      => __( 'Facebook Feed', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-facebook-feed-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/facebook-feed-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-facebook-feed',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-facebook-feed-widget/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-twitter-feed',
				'name'       => 'premium-twitter-feed',
				'title'      => __( 'Twitter Feed', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/twitter-feed-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/twitter-feed-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=wsurRDuR6pg',
				'is_pro'     => true,
				'icon'       => 'pa-pro-twitter-feed',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/twitter-feed-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-instagram-feed',
				'name'       => 'premium-addon-instagram-feed',
				'title'      => __( 'Instagram Feed', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/instagram-feed-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/instagram-feed/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-instagram-feed',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/instagram-feed-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-behance',
				'name'       => 'premium-behance-feed',
				'title'      => __( 'Behance Feed', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/behance-feed-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/behance-feed-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=AXATK3oIXl0',
				'is_pro'     => true,
				'icon'       => 'pa-pro-behance-feed',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/behance-feed-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'      => 'premium-progressbar',
				'name'     => 'premium-addon-progressbar',
				'title'    => __( 'Progress Bar', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/progress-bar-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-progress-bar-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=Y7xqwhgDQJg',
			),
			array(
				'key'   => 'premium-pricing-table',
				'name'  => 'premium-addon-pricing-table',
				'title' => __( 'Pricing Table', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/pricing-table-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/pricing-table-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-charts',
				'name'       => 'premium-chart',
				'title'      => __( 'Charts', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/charts-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/charts-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'   => 'https://www.youtube.com/watch?v=lZZvslQ2UYU',
				'is_pro'     => true,
				'icon'       => 'pa-pro-charts',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/charts-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-tables',
				'name'       => 'premium-tables-addon',
				'title'      => __( 'Table', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/table-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/table-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-table',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/table-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'premium-counter',
				'name'  => 'premium-counter',
				'title' => __( 'Counter', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/counter-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/counter-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-contactform',
				'name'  => 'premium-contact-form',
				'title' => __( 'Contact Form 7', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/contact-form-7-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/contact-form-7-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'        => 'premium-fb-chat',
				'name'       => 'premium-addon-facebook-chat',
				'title'      => __( 'Facebook Messenger Chat', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/facebook-messenger-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/facebook-messenger/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-messenger-chat',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/facebook-messenger-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'        => 'premium-whatsapp-chat',
				'name'       => 'premium-whatsapp-chat',
				'title'      => __( 'WhatsApp Chat', 'premium-addons-for-elementor' ),
				'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/whatsapp-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'        => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/whatsapp-chat-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'     => true,
				'icon'       => 'pa-pro-whatsapp',
				'action_url' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/whatsapp-widget-for-elementor-page-builder/', 'editor-page', 'wp-editor', 'get-pro' ),
			),
			array(
				'key'   => 'woo-products',
				'title' => __( 'Woo Products', 'premium-addons-for-elementor' ),
				'name'  => 'premium-woo-products',
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-woocommerce-products/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
		),
	),
	'cat-2'  => array(
		'icon'     => 'content',
		'title'    => __( 'Content Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'      => 'premium-carousel',
				'name'     => 'premium-carousel-widget',
				'title'    => __( 'Carousel', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/carousel-widget-for-elementor-page-builder', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/carousel/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=ZMgprLKvq24',
			),
			array(
				'key'   => 'premium-blog',
				'name'  => 'premium-addon-blog',
				'title' => __( 'Blog', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/blog-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/blog/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-nav-menu',
				'name'  => 'premium-nav-menu',
				'title' => __( 'Nav/Mega Menu', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-mega-menu-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/elementor-mega-menu-widget-tutorial', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'      => 'premium-maps',
				'name'     => 'premium-addon-maps',
				'title'    => __( 'Google Maps', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-maps-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/google-maps/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=z4taEeCY77Q',
			),
			array(
				'key'   => 'premium-person',
				'name'  => 'premium-addon-person',
				'title' => __( 'Team Members', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/persons-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/persons-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-tabs',
				'name'   => 'premium-addon-tabs',
				'title'  => __( 'Tabs', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-tabs-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/tabs-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-content-toggle',
				'name'   => 'premium-addon-content-toggle',
				'title'  => __( 'Content Switcher', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/content-switcher-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-content-switcher/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'   => 'premium-fancytext',
				'name'  => 'premium-addon-fancy-text',
				'title' => __( 'Fancy Text', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/fancy-text-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/fancy-text-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-title',
				'name'  => 'premium-addon-title',
				'title' => __( 'Heading', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/heading-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/heading-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-dual-header',
				'name'  => 'premium-addon-dual-header',
				'title' => __( 'Dual Heading', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/dual-header-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/dual-heading-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-divider',
				'name'   => 'premium-divider',
				'title'  => __( 'Divider', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/divider-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/divider-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
		),
	),
	'cat-3'  => array(
		'icon'     => 'images',
		'title'    => __( 'Image & Video Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'   => 'premium-grid',
				'name'  => 'premium-img-gallery',
				'title' => __( 'Media Grid', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/grid-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/grid-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-image-scroll',
				'name'  => 'premium-image-scroll',
				'title' => __( 'Image Scroll', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-scroll-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-scroll-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-image-separator',
				'name'  => 'premium-addon-image-separator',
				'title' => __( 'Image Separator', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-separator-widget-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-separator-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-image-comparison',
				'name'   => 'premium-addon-image-comparison',
				'title'  => __( 'Image Comparison', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-comparison-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-image-comparison-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-image-hotspots',
				'name'   => 'premium-addon-image-hotspots',
				'title'  => __( 'Image Hotspots', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-hotspots-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-hotspots-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'      => 'premium-img-layers',
				'name'     => 'premium-img-layers-addon',
				'title'    => __( 'Image Layers', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-layers-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/image-layers/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=D3INxWw_jKI',
				'is_pro'   => true,
			),
			array(
				'key'    => 'premium-image-accordion',
				'name'   => 'premium-image-accordion',
				'title'  => __( 'Image Accordion', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-accordion-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/image-accordion-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'   => 'premium-videobox',
				'name'  => 'premium-addon-video-box',
				'title' => __( 'Video Box', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/video-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/video-box/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
		),
	),
	'cat-4'  => array(
		'icon'     => 'section',
		'title'    => __( 'Section Addons & Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'      => 'premium-hscroll',
				'name'     => 'premium-hscroll',
				'title'    => __( 'Horizontal Scroll', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-horizontal-scroll-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/horizontal-scroll/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=4HqT_3s-ZXg',
				'is_pro'   => true,
			),
			array(
				'key'      => 'premium-vscroll',
				'name'     => 'premium-vscroll',
				'title'    => __( 'Vertical Scroll', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/vertical-scroll-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/vertical-scroll-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=MuLaIn1QXfQ',
			),
			array(
				'key'    => 'premium-color-transition',
				'name'   => 'premium-color-transition',
				'title'  => __( 'Background Transition', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-background-transition-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/background-transition-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'      => 'premium-multi-scroll',
				'name'     => 'premium-multi-scroll',
				'title'    => __( 'Multi Scroll', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/multi-scroll-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/multi-scroll-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=IzYnD6oDYXw',
				'is_pro'   => true,
			),
			array(
				'key'       => 'premium-lottie',
				'title'     => __( 'Lottie Animations', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-lottie-animations-section-addon/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/lottie-background/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=KVrenWNEdkY',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-parallax',
				'title'     => __( 'Parallax', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/parallax-section-addon-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/parallax-section-addon-tutorial-2/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=hkMNjxLoZ2w',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-particles',
				'title'     => __( 'Particles', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/particles-section-addon-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/particles/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=bPmWKv4VWrI',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-gradient',
				'title'     => __( 'Animated Gradient', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/animated-section-gradients-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/animated-gradient-section-addon-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=IL4USvwR6K4',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-kenburns',
				'title'     => __( 'Animated Ken Burns', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/ken-burns-section-addon-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/ken-burns-section-addon-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial'  => 'https://www.youtube.com/watch?v=DUNFjWphZfs',
				'is_pro'    => true,
				'is_global' => true,
			),
			array(
				'key'       => 'premium-blob',
				'title'     => __( 'Blob Generator', 'premium-addons-for-elementor' ),
				'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-animated-blob-generator/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro'    => true,
				'is_global' => true,
			),
		),
	),
	'cat-5'  => array(
		'icon'     => 'off-grid',
		'title'    => __( 'Off-Grid Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'      => 'premium-modalbox',
				'name'     => 'premium-addon-modal-box',
				'title'    => __( 'Modal Box', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/modal-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/modal-box/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=3lLxSyf2nyk',
			),
			array(
				'key'    => 'premium-notbar',
				'name'   => 'premium-notbar',
				'title'  => __( 'Alert Box', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/alert-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/alert-box-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-magic-section',
				'name'   => 'premium-addon-magic-section',
				'title'  => __( 'Magic Section', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/magic-section-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/magic-section-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'      => 'premium-prev-img',
				'name'     => 'premium-addon-preview-image',
				'title'    => __( 'Preview Window', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/preview-window-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/preview-window-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=EmptjFjrc4E',
				'is_pro'   => true,
			),
		),
	),
	'cat-6'  => array(
		'icon'     => 'social',
		'title'    => __( 'Reviews & Testimonials Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'   => 'premium-testimonials',
				'name'  => 'premium-addon-testimonials',
				'title' => __( 'Testimonials', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/testimonials-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/testimonials-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'      => 'premium-facebook-reviews',
				'name'     => 'premium-facebook-reviews',
				'title'    => __( 'Facebook Reviews', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/facebook-reviews-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/facebook-reviews/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=zl-OFo3IFd8',
				'is_pro'   => true,
			),
			array(
				'key'      => 'premium-google-reviews',
				'name'     => 'premium-google-reviews',
				'title'    => __( 'Google Reviews', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-reviews-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/google-reviews/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=Z0EeGyD34Zk',
				'is_pro'   => true,
			),
			array(
				'key'      => 'premium-yelp-reviews',
				'name'     => 'premium-yelp-reviews',
				'title'    => __( 'Yelp Reviews', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-yelp-reviews-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/yelp-reviews/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=5T-MveVFvns',
				'is_pro'   => true,
			),
		),
	),
	'cat-7'  => array(
		'icon'     => 'blurbs',
		'title'    => __( 'Blurbs & CTA Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'   => 'premium-countdown',
				'name'  => 'premium-countdown-timer',
				'title' => __( 'Countdown', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/countdown-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/countdown-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'   => 'premium-banner',
				'name'  => 'premium-addon-banner',
				'title' => __( 'Banner', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/banner-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-banner-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'      => 'premium-button',
				'name'     => 'premium-addon-button',
				'title'    => __( 'Button', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/button-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/button/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=w4NuCUkCIV4',
			),
			array(
				'key'   => 'premium-image-button',
				'title' => __( 'Image Button', 'premium-addons-for-elementor' ),
				'name'  => 'premium-addon-image-button',
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-button-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/image-button/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-flipbox',
				'name'   => 'premium-addon-flip-box',
				'title'  => __( '3D Hover Box', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/3d-hover-box-flip-box-widget-for-elementor/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/flip-box-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-iconbox',
				'name'   => 'premium-addon-icon-box',
				'title'  => __( 'Icon Box', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/icon-box-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/icon-box-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-ihover',
				'name'   => 'premium-ihover',
				'title'  => __( 'iHover', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/ihover-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-ihover-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-unfold',
				'name'   => 'premium-unfold-addon',
				'title'  => __( 'Unfold', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/unfold-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-unfold-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'      => 'premium-icon-list',
				'name'     => 'premium-icon-list',
				'title'    => __( 'Bullet List', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-bullet-list-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/bullet-list-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=MPeXJiZ14sI',
			),
		),
	),
	'cat-8'  => array(
		'icon'     => 'feed',
		'title'    => __( 'Social Feed Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'    => 'premium-facebook-feed',
				'name'   => 'premium-facebook-feed',
				'title'  => __( 'Facebook Feed', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-facebook-feed-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/facebook-feed-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'      => 'premium-twitter-feed',
				'name'     => 'premium-twitter-feed',
				'title'    => __( 'Twitter Feed', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/twitter-feed-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/twitter-feed-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=wsurRDuR6pg',
				'is_pro'   => true,
			),
			array(
				'key'    => 'premium-instagram-feed',
				'name'   => 'premium-addon-instagram-feed',
				'title'  => __( 'Instagram Feed', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/instagram-feed-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/instagram-feed/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'      => 'premium-behance',
				'name'     => 'premium-behance-feed',
				'title'    => __( 'Behance Feed', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/behance-feed-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/behance-feed-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=AXATK3oIXl0',
				'is_pro'   => true,
			),
		),
	),
	'cat-9'  => array(
		'icon'     => 'data',
		'title'    => __( 'Tables, Charts & Anything Data Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'      => 'premium-progressbar',
				'name'     => 'premium-addon-progressbar',
				'title'    => __( 'Progress Bar', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/progress-bar-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/premium-progress-bar-widget/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=Y7xqwhgDQJg',
			),
			array(
				'key'   => 'premium-pricing-table',
				'name'  => 'premium-addon-pricing-table',
				'title' => __( 'Pricing Table', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/pricing-table-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/pricing-table-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'      => 'premium-charts',
				'name'     => 'premium-chart',
				'title'    => __( 'Charts', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/charts-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/charts-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'tutorial' => 'https://www.youtube.com/watch?v=lZZvslQ2UYU',
				'is_pro'   => true,
			),
			array(
				'key'    => 'premium-tables',
				'name'   => 'premium-tables-addon',
				'title'  => __( 'Table', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/table-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/table-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'   => 'premium-counter',
				'name'  => 'premium-counter',
				'title' => __( 'Counter', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/counter-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/counter-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
		),
	),
	'cat-10' => array(
		'icon'     => 'contact',
		'title'    => __( 'Contact Widgets', 'premium-addons-for-elementor' ),
		'elements' => array(
			array(
				'key'   => 'premium-contactform',
				'name'  => 'premium-contact-form',
				'title' => __( 'Contact Form 7', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/contact-form-7-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/contact-form-7-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-fb-chat',
				'name'   => 'premium-addon-facebook-chat',
				'title'  => __( 'Facebook Messenger Chat', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/facebook-messenger-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs-category/using-widgets/facebook-messenger/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
			array(
				'key'    => 'premium-whatsapp-chat',
				'name'   => 'premium-whatsapp-chat',
				'title'  => __( 'WhatsApp Chat', 'premium-addons-for-elementor' ),
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/whatsapp-widget-for-elementor-page-builder/', 'settings-page', 'wp-dash', 'dashboard' ),
				'doc'    => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/docs/whatsapp-chat-widget-tutorial/', 'settings-page', 'wp-dash', 'dashboard' ),
				'is_pro' => true,
			),
		),
	),
	'cat-11' => array(
		'icon'     => 'extensions',
		'elements' => array(
			array(
				'key'  => 'premium-templates',
				'demo' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/premium-templates-for-elementor/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'  => 'premium-equal-height',
				'demo' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/premium-addons-global-features-for-elementor/#equal-height-feature', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'  => 'pa-display-conditions',
				'demo' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-display-conditions/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-global-cursor',
				'is_pro' => true,
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-custom-mouse-cursor-global-feature/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'    => 'premium-global-badge',
				'is_pro' => true,
				'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-badge-global-addon/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'  => 'premium-floating-effects',
				'demo' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-floating-effects-animation/', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key'  => 'premium-cross-domain',
				'demo' => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/premium-addons-global-features-for-elementor/#common-features', 'settings-page', 'wp-dash', 'dashboard' ),
			),
			array(
				'key' => 'premium-duplicator',
			),
			array(
				'key' => 'premium-assets-generator',
			),
		),
	),
);

return $elements;
