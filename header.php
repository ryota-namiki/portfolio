<?php
/**
 * The header template file
 *
 * @package Portfolio
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <defs>
    <filter id="glass-distortion" x="0%" y="0%" width="100%" height="100%">
      <feTurbulence type="fractalNoise" baseFrequency="0.008 0.008" numOctaves="2" seed="92" result="noise" />
      <feGaussianBlur in="noise" stdDeviation="2" result="blurred" />
      <feDisplacementMap in="SourceGraphic" in2="blurred" scale="77" xChannelSelector="R" yChannelSelector="G" />
    </filter>
  </defs>
</svg>

<div id="page" class="site">
  <header id="masthead" class="site-header">
    <nav class="navbar">
      <div class="navbar-container">
        <div class="site-branding">
          <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-t.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo site-logo-desktop">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo site-logo-mobile">
            </a>
          </h1>
        </div>
        <div class="navbar-actions">
          <div class="navbar-buttons">
            <a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="navbar-btn navbar-btn-dark">
              <?php esc_html_e( '制作実績', 'portfolio' ); ?>
            </a>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="navbar-btn navbar-btn-gradient">
              <?php esc_html_e( 'お問い合わせ', 'portfolio' ); ?>
            </a>
          </div>
          <div class="navbar-menu-toggle">
            <span class="menu-text"><?php esc_html_e( 'Menu', 'portfolio' ); ?></span>
            <button class="menu-icon-btn" id="menu-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'portfolio' ); ?>" aria-controls="overlay-menu" aria-expanded="false">
              <svg class="menu-icon" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 12H32M8 20H32M8 28H32" stroke="#14212B" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <nav id="overlay-menu" class="nav-overlay" aria-hidden="true">
    <div class="nav-overlay__content">
      <ul class="nav-overlay__list">
        <li class="nav-overlay__item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-overlay__link">ホーム</a>
        </li>
        <li class="nav-overlay__item">
          <a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="nav-overlay__link">制作実績</a>
        </li>
        <li class="nav-overlay__item">
          <a href="<?php echo esc_url( home_url( '/plan/' ) ); ?>" class="nav-overlay__link">制作プラン</a>
        </li>
        <li class="nav-overlay__item">
          <a href="<?php echo esc_url( home_url( '/skills/' ) ); ?>" class="nav-overlay__link">スキル・経歴</a>
        </li>
        <li class="nav-overlay__item">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-overlay__link">お問い合わせ</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="content" class="site-content">


