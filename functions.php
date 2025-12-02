<?php
/**
 * Portfolio Theme Functions
 *
 * @package Portfolio
 */

/**
 * カスタム投稿タイプ「project」を登録
 */
function portfolio_register_project_post_type() {
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'portfolio' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'portfolio' ),
		'menu_name'             => __( 'Projects', 'portfolio' ),
		'name_admin_bar'        => __( 'Project', 'portfolio' ),
		'archives'              => __( 'Project Archives', 'portfolio' ),
		'attributes'            => __( 'Project Attributes', 'portfolio' ),
		'parent_item_colon'     => __( 'Parent Project:', 'portfolio' ),
		'all_items'             => __( 'All Projects', 'portfolio' ),
		'add_new_item'          => __( 'Add New Project', 'portfolio' ),
		'add_new'               => __( 'Add New', 'portfolio' ),
		'new_item'              => __( 'New Project', 'portfolio' ),
		'edit_item'             => __( 'Edit Project', 'portfolio' ),
		'update_item'           => __( 'Update Project', 'portfolio' ),
		'view_item'             => __( 'View Project', 'portfolio' ),
		'view_items'            => __( 'View Projects', 'portfolio' ),
		'search_items'          => __( 'Search Project', 'portfolio' ),
		'not_found'             => __( 'Not found', 'portfolio' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'portfolio' ),
		'featured_image'        => __( 'Featured Image', 'portfolio' ),
		'set_featured_image'    => __( 'Set featured image', 'portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'portfolio' ),
		'use_featured_image'    => __( 'Use as featured image', 'portfolio' ),
		'insert_into_item'      => __( 'Insert into project', 'portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'portfolio' ),
		'items_list'            => __( 'Projects list', 'portfolio' ),
		'items_list_navigation' => __( 'Projects list navigation', 'portfolio' ),
		'filter_items_list'     => __( 'Filter projects list', 'portfolio' ),
	);

	$args = array(
		'label'                 => __( 'Project', 'portfolio' ),
		'description'           => __( 'Portfolio projects', 'portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rewrite'               => array(
			'slug'       => 'project',
			'with_front' => false,
		),
	);

	register_post_type( 'project', $args );
}
add_action( 'init', 'portfolio_register_project_post_type', 0 );

/**
 * テーマサポート機能を設定
 */
function portfolio_theme_setup() {
	// タイトルタグのサポート
	add_theme_support( 'title-tag' );

	// アイキャッチ画像のサポート
	add_theme_support( 'post-thumbnails' );

	// HTML5マークアップのサポート
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// フィードリンクのサポート
	add_theme_support( 'automatic-feed-links' );

	// カスタムロゴのサポート
	add_theme_support( 'custom-logo' );

	// 幅の設定
	$GLOBALS['content_width'] = 1030;
}
add_action( 'after_setup_theme', 'portfolio_theme_setup' );

/**
 * スタイルシートとスクリプトをエンキュー
 */
function portfolio_enqueue_styles() {
	// メインスタイルシート
	wp_enqueue_style(
		'portfolio-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

/**
 * フェードインアニメーション用のJavaScriptを追加
 */
function portfolio_fade_in_script() {
	?>
	<script>
		(function() {
			function initFadeIn() {
				const fadeElements = document.querySelectorAll(".fade-in");
				if (fadeElements.length === 0) return;

				const observer = new IntersectionObserver((entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							entry.target.classList.add("visible");
							observer.unobserve(entry.target);
						}
					});
				}, {
					threshold: 0.1,
					rootMargin: "0px 0px -50px 0px"
				});

				fadeElements.forEach((element) => {
					observer.observe(element);
				});
			}

			if (document.readyState === "loading") {
				document.addEventListener("DOMContentLoaded", initFadeIn);
			} else {
				initFadeIn();
			}
		})();
	</script>
	<?php
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );
add_action( 'wp_footer', 'portfolio_fade_in_script' );

/**
 * FV画像ヘルパー関数を読み込み
 */
require_once get_template_directory() . '/inc/fv-image-helper.php';

/**
 * アーカイブページのクエリを修正
 */
function portfolio_modify_archive_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		if ( is_post_type_archive( 'project' ) ) {
			$query->set( 'post_status', 'publish' );
			$query->set( 'orderby', 'date' );
			$query->set( 'order', 'DESC' );
			$query->set( 'posts_per_page', -1 );
		}
	}
}
add_action( 'pre_get_posts', 'portfolio_modify_archive_query', 20 );

