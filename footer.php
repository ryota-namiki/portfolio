<?php
/**
 * The footer template file
 *
 * @package Portfolio
 */
?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer">
    <div class="footer-wrapper">
      <div class="footer-content">
        <div class="footer-left">
          <p class="footer-role">Web UI/UX Designer</p>
          <h2 class="footer-name">Ryota Namiki</h2>
          <div class="footer-tagline">
            <p>あなたのビジネスに、</p>
            <p>新しい生命を吹き込むデザイン</p>
          </div>
        </div>
        <div class="footer-right">
          <nav class="footer-nav-section">
            <div class="footer-nav-column">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-nav-link">
                <span class="footer-nav-title">ホーム</span>
              </a>
              <a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="footer-nav-link">
                <span class="footer-nav-title">制作実績</span>
              </a>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer-nav-link">
                <span class="footer-nav-title">お問い合わせ</span>
              </a>
            </div>
            <div class="footer-nav-column">
              <a href="<?php echo esc_url( home_url( '/plan/' ) ); ?>" class="footer-nav-link">
                <span class="footer-nav-label">ホームページ制作 / LP制作をご希望の</span>
                <span class="footer-nav-title">中小企業の経営者の方へ</span>
              </a>
              <a href="<?php echo esc_url( home_url( '/skills/' ) ); ?>" class="footer-nav-link">
                <span class="footer-nav-label">提携できるデザイナーをお探しの</span>
                <span class="footer-nav-title">制作会社、マーケティング事業の方へ</span>
              </a>
            </div>
          </nav>
          <div class="footer-social">
            <?php
            $sns_icons = array(
              array( 'url' => 'https://www.instagram.com/ryota_namiki_?igsh=cHphMDNqenYwOWR1&utm_source=qr', 'icon' => 'sns-icon-1.webp', 'alt' => 'Instagram' ),
              array( 'url' => 'https://x.com/ryota_namiki_?s=21&t=jbMvEdOn6YwLAPmcFLbmDg', 'icon' => 'sns-icon-2.webp', 'alt' => 'X (Twitter)' ),
              array( 'url' => 'https://www.threads.com/@ryota_namiki_?igshid=NTc4MTIwNjQ2YQ==', 'icon' => 'sns-icon-3.webp', 'alt' => 'Threads' ),
              array( 'url' => 'https://lin.ee/fmCB85R', 'icon' => 'sns-icon-4.webp', 'alt' => 'LINE' ),
            );
            foreach ( $sns_icons as $sns ) {
              $icon_url = get_template_directory_uri() . '/images/' . $sns['icon'];
              ?>
              <a href="<?php echo esc_url( $sns['url'] ); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( $sns['alt'] ); ?>">
                <img src="<?php echo esc_url( $icon_url ); ?>" alt="<?php echo esc_attr( $sns['alt'] ); ?>" class="footer-social-icon" loading="lazy" decoding="async">
              </a>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <p>&copy; 2025 RNStyle</p>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

