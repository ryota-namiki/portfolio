<?php
/**
 * Template part for displaying the contact section
 *
 * @package Portfolio
 */
?>

<section class="contact-section">
  <div class="contact-background">
  </div>
  <div class="section-container">
    <div class="contact-box fade-in">
      <div class="contact-content">
        <div class="contact-text-group">
          <h3 class="contact-title">お問い合わせ</h3>
          <p class="contact-text">お見積り・ご相談は無料です。お気軽にお問合せください。</p>
        </div>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="cta-button">
          <span>お問い合わせフォームへ</span>
          <svg class="icon-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

