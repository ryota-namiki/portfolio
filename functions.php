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

  // サイトアイコンのサポート（管理画面での設定を有効化）
  add_theme_support( 'site-icon' );

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

/**
 * アコーディオン機能用のJavaScriptを追加
 */
function portfolio_accordion_script() {
  ?>
  <script>
    (function() {
      function initAccordion() {
        const toggleButtons = document.querySelectorAll(".process-detail-toggle");
        if (toggleButtons.length === 0) return;

        toggleButtons.forEach((button) => {
          button.addEventListener("click", function() {
            const box = this.closest(".process-detail-box");
            const content = box.querySelector(".process-detail-content");
            const isActive = content.classList.contains("active");
            
            if (isActive) {
              content.classList.remove("active");
              button.classList.remove("active");
            } else {
              content.classList.add("active");
              button.classList.add("active");
            }
          });
        });
      }

      if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initAccordion);
      } else {
        initAccordion();
      }
    })();
  </script>
  <?php
}

/**
 * プランタブ切り替え機能用のJavaScriptを追加
 */
function portfolio_plan_tabs_script() {
  ?>
  <script>
    (function() {
      function initPlanTabs() {
        const tabButtons = document.querySelectorAll(".plan-tab");
        const planContainers = document.querySelectorAll(".plan-cards-container");
        
        if (tabButtons.length === 0 || planContainers.length === 0) return;

        tabButtons.forEach((button) => {
          button.addEventListener("click", function() {
            const targetTab = this.getAttribute("data-tab");
            
            // すべてのタブからactiveクラスを削除
            tabButtons.forEach((btn) => btn.classList.remove("active"));
            // クリックされたタブにactiveクラスを追加
            this.classList.add("active");
            
            // すべてのプランコンテナを非表示
            planContainers.forEach((container) => {
              container.style.display = "none";
            });
            
            // 選択されたタブに対応するプランコンテナを表示
            const targetContainer = document.querySelector(
              `.plan-cards-container[data-plan-type="${targetTab}"]`
            );
            if (targetContainer) {
              targetContainer.style.display = "flex";
            }
          });
        });
      }

      if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initPlanTabs);
      } else {
        initPlanTabs();
      }
    })();
  </script>
  <?php
}
/**
 * オーバーレイメニュー機能用のJavaScriptを追加
 */
function portfolio_overlay_menu_script() {
  ?>
  <script>
    (function() {
      function initOverlayMenu() {
        const menuToggle = document.getElementById('menu-toggle');
        const nav = document.getElementById('overlay-menu');
        
        if (!menuToggle || !nav) return;

        menuToggle.addEventListener('click', () => {
          menuToggle.classList.toggle('active');
          nav.classList.toggle('active');
          const isOpen = menuToggle.classList.contains('active');
          menuToggle.setAttribute('aria-expanded', isOpen);
          nav.setAttribute('aria-hidden', !isOpen);
          // メニューオープン時に背景スクロールを防止
          document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // ESCキーでメニューを閉じる
        document.addEventListener('keydown', (e) => {
          if (e.key === 'Escape' && nav.classList.contains('active')) {
            menuToggle.classList.remove('active');
            nav.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', false);
            nav.setAttribute('aria-hidden', true);
            document.body.style.overflow = '';
          }
        });

        // メニューリンクをクリックしたらメニューを閉じる
        const navLinks = document.querySelectorAll('.nav-overlay__link');
        navLinks.forEach((link) => {
          link.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            nav.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', false);
            nav.setAttribute('aria-hidden', true);
            document.body.style.overflow = '';
          });
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initOverlayMenu);
      } else {
        initOverlayMenu();
      }
    })();
  </script>
  <?php
}

/**
 * Contact Form 7用のJavaScriptを追加
 */
function portfolio_contact_form_7_script() {
  // お問い合わせページでのみ読み込む
  if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
    ?>
    <script>
      (function() {
        function initContactForm7() {
          const submitButtons = document.querySelectorAll('.js-cf7-submit');
          
          submitButtons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
              e.preventDefault();
              e.stopPropagation();

              // 対象のフォームを取得
              const contactFormSection = document.querySelector('.contact-form-section');
              if (!contactFormSection) {
                console.warn('Contact form section not found');
                return;
              }

              const form = contactFormSection.querySelector('form.wpcf7-form');
              if (!form) {
                console.warn('Contact Form 7 form not found');
                return;
              }

              // Contact Form 7の送信ボタンを探す（より広範囲に検索）
              let submitBtn = form.querySelector('input[type="submit"]');
              if (!submitBtn) {
                submitBtn = form.querySelector('button[type="submit"]');
              }
              if (!submitBtn) {
                submitBtn = form.querySelector('.wpcf7-submit');
              }
              if (!submitBtn) {
                submitBtn = form.querySelector('input.wpcf7-submit');
              }
              if (!submitBtn) {
                submitBtn = form.querySelector('button.wpcf7-submit');
              }
              // フォームの外も検索（Contact Form 7の設定によっては送信ボタンが外にある場合がある）
              if (!submitBtn) {
                const formId = form.id || form.getAttribute('id');
                if (formId) {
                  submitBtn = document.querySelector('#' + formId.replace('wpcf7-f', 'wpcf7') + ' input[type="submit"]');
                }
              }
              
              if (submitBtn) {
                // Contact Form 7の送信ボタンをクリック
                submitBtn.click();
              } else {
                // Contact Form 7の送信イベントを直接トリガー
                // フォームのsubmitイベントを発火させる
                const submitEvent = new Event('submit', {
                  bubbles: true,
                  cancelable: true
                });
                
                // Contact Form 7のイベントハンドラーをトリガー
                if (form.dispatchEvent(submitEvent)) {
                  // イベントがキャンセルされなかった場合、Contact Form 7の送信処理を実行
                  // Contact Form 7は通常、submitイベントをリッスンしている
                  const wpcf7Form = form.closest('.wpcf7');
                  if (wpcf7Form) {
                    // Contact Form 7の送信処理を手動でトリガー
                    const formTag = wpcf7Form.querySelector('form');
                    if (formTag && typeof jQuery !== 'undefined') {
                      // jQueryを使用してContact Form 7の送信処理を実行
                      jQuery(formTag).trigger('submit');
                    } else {
                      // フォームを直接送信
                      form.submit();
                    }
                  } else {
                    form.submit();
                  }
                }
              }
            });
          });
        }

        // Contact Form 7が読み込まれた後に初期化
        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', function() {
            // Contact Form 7の読み込みを待つ
            setTimeout(initContactForm7, 100);
          });
        } else {
          setTimeout(initContactForm7, 100);
        }
      })();
    </script>
    <?php
  }
}

/**
 * Contact Form 7送信完了後のリダイレクト処理
 */
function portfolio_cf7_redirect_script() {
  // お問い合わせページでのみ読み込む
  if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
    ?>
    <script>
      document.addEventListener('wpcf7mailsent', function(event) {
        window.location.href = '<?php echo esc_url( home_url( '/contact/thanks/' ) ); ?>';
      }, false);
    </script>
    <?php
  }
}

/**
 * WordPressの標準サイトアイコン出力を無効化
 */
function portfolio_remove_default_site_icon() {
  remove_action( 'wp_head', 'wp_site_icon', 99 );
}
add_action( 'init', 'portfolio_remove_default_site_icon' );

/**
 * ファビコンを追加（ハイブリッド方式）
 * 管理画面で設定したファビコンに加えて、SVGファビコンも追加
 */
function portfolio_add_favicons() {
  $svg_favicon_url = get_template_directory_uri() . '/images/logo.svg';
  $site_icon_id = get_option( 'site_icon' );
  
  // SVGファビコンを最初に追加（対応ブラウザ向け）
  echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $svg_favicon_url ) . '">' . "\n";
  
  // 管理画面で設定されたサイトアイコンがある場合
  if ( $site_icon_id ) {
    // 複数サイズのアイコンを取得
    $icon_sizes = array( 32, 180, 192, 270, 512 );
    foreach ( $icon_sizes as $size ) {
      $icon_url = wp_get_attachment_image_url( $site_icon_id, array( $size, $size ) );
      if ( $icon_url ) {
        if ( $size === 180 ) {
          // Apple Touch Icon
          echo '<link rel="apple-touch-icon" sizes="' . $size . 'x' . $size . '" href="' . esc_url( $icon_url ) . '">' . "\n";
        } else {
          // その他のサイズ
          echo '<link rel="icon" type="image/png" sizes="' . $size . 'x' . $size . '" href="' . esc_url( $icon_url ) . '">' . "\n";
        }
      }
    }
    // デフォルトのfavicon（32x32）
    $default_icon_url = wp_get_attachment_image_url( $site_icon_id, 32 );
    if ( $default_icon_url ) {
      echo '<link rel="shortcut icon" href="' . esc_url( $default_icon_url ) . '">' . "\n";
    }
  } else {
    // サイトアイコンが設定されていない場合、SVGをフォールバックとしても使用
    echo '<link rel="icon" type="image/png" href="' . esc_url( $svg_favicon_url ) . '">' . "\n";
  }
}
// wp_headで出力（優先度99でWordPressの標準出力の後に実行）
add_action( 'wp_head', 'portfolio_add_favicons', 99 );

add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );
add_action( 'wp_footer', 'portfolio_fade_in_script' );
add_action( 'wp_footer', 'portfolio_accordion_script' );
add_action( 'wp_footer', 'portfolio_plan_tabs_script' );
add_action( 'wp_footer', 'portfolio_overlay_menu_script' );
add_action( 'wp_footer', 'portfolio_contact_form_7_script' );
add_action( 'wp_footer', 'portfolio_cf7_redirect_script' );

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

/**
 * Contact Form 7のメール送信をデバッグ
 * メール送信の成功/失敗をログに記録
 */
function portfolio_cf7_mail_debug( $contact_form ) {
  // メール送信前のフック
  add_action( 'wpcf7_mail_sent', 'portfolio_cf7_mail_sent_log', 10, 1 );
  add_action( 'wpcf7_mail_failed', 'portfolio_cf7_mail_failed_log', 10, 1 );
}
add_action( 'wpcf7_before_send_mail', 'portfolio_cf7_mail_debug' );

function portfolio_cf7_mail_sent_log( $contact_form ) {
  error_log( 'Contact Form 7: メール送信成功 - Form ID: ' . $contact_form->id() );
}

function portfolio_cf7_mail_failed_log( $contact_form ) {
  error_log( 'Contact Form 7: メール送信失敗 - Form ID: ' . $contact_form->id() );
}

/**
 * WordPressのメール送信機能を改善（開発環境用）
 * 本番環境ではSMTPプラグインの使用を推奨
 */
function portfolio_configure_mail( $phpmailer ) {
  // MAMP環境などでメール送信ができない場合の設定
  // 本番環境では、SMTPプラグイン（例: WP Mail SMTP）の使用を推奨
  
  // デバッグモードを有効化（開発環境のみ）
  if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
    $phpmailer->SMTPDebug = 2; // デバッグレベル（0-4）
    $phpmailer->Debugoutput = function( $str, $level ) {
      error_log( "PHPMailer [$level]: $str" );
    };
  }
}
add_action( 'phpmailer_init', 'portfolio_configure_mail' );

/**
 * メール送信のテスト機能（管理画面でのみ使用可能）
 */
function portfolio_test_mail() {
  if ( ! current_user_can( 'manage_options' ) ) {
    return;
  }
  
  if ( isset( $_GET['test_mail'] ) && $_GET['test_mail'] === '1' ) {
    $to = get_option( 'admin_email' );
    $subject = 'テストメール - ' . get_bloginfo( 'name' );
    $message = 'これはテストメールです。メール送信機能が正常に動作しています。';
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );
    
    $result = wp_mail( $to, $subject, $message, $headers );
    
    if ( $result ) {
      wp_die( 'メール送信成功！メールボックスを確認してください。', 'メール送信テスト', array( 'back_link' => true ) );
    } else {
      wp_die( 'メール送信失敗。SMTPプラグインの設定を確認してください。', 'メール送信テスト', array( 'back_link' => true ) );
    }
  }
}
add_action( 'admin_init', 'portfolio_test_mail' );

/**
 * テーマカスタマイザーに「選ばれる理由」セクションを追加
 */
function portfolio_customize_register( $wp_customize ) {
  // 「選ばれる理由」セクションを追加
  $wp_customize->add_section( 'why_choose_section', array(
    'title'       => __( '選ばれる理由', 'portfolio' ),
    'description' => __( 'TOPページの「選ばれる理由」セクションで使用する画像を設定します。', 'portfolio' ),
    'priority'    => 25,
    'capability'  => 'edit_theme_options',
  ) );

  // 画像1: 中小企業の経営者の方へ
  $wp_customize->add_setting( 'why_choose_image_1', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'why_choose_image_1', array(
    'label'       => __( '画像 01: 中小企業の経営者の方へ', 'portfolio' ),
    'section'     => 'why_choose_section',
    'mime_type'   => 'image',
  ) ) );

  // 画像2: 対話から生まれるデザイン
  $wp_customize->add_setting( 'why_choose_image_2', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'why_choose_image_2', array(
    'label'       => __( '画像 02: 対話から生まれるデザイン', 'portfolio' ),
    'section'     => 'why_choose_section',
    'mime_type'   => 'image',
  ) ) );

  // 画像3: 感性で魅せる、デザインの幅
  $wp_customize->add_setting( 'why_choose_image_3', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'why_choose_image_3', array(
    'label'       => __( '画像 03: 感性で魅せる、デザインの幅', 'portfolio' ),
    'section'     => 'why_choose_section',
    'mime_type'   => 'image',
  ) ) );
}
add_action( 'customize_register', 'portfolio_customize_register' );