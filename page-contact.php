<?php
/**
 * The template for displaying the Contact page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main">
<!-- Contact Page FV Section -->
<section class="contact-fv-section">
<div class="contact-fv-background">
<?php
$fv_image_id = portfolio_get_page_fv_image_id();
if ( $fv_image_id ) {
echo wp_get_attachment_image( $fv_image_id, 'full', false, array(
    'class' => 'contact-fv-bg-image',
    'loading' => 'eager',
    'fetchpriority' => 'high',
    'decoding' => 'async',
    'alt' => get_the_title()
) );
} else {
$contact_fv_bg = portfolio_get_image_url( 'fv_background_image', 'full' );
if ( $contact_fv_bg ) {
    echo '<img src="' . esc_url( $contact_fv_bg ) . '" alt="Contact Background" class="contact-fv-bg-image" loading="eager" fetchpriority="high" decoding="async">';
}
}
?>
<div class="contact-fv-overlay"></div>
</div>
<div class="contact-fv-content">
<p class="contact-fv-label">お見積り・ご相談は無料です</p>
<h2 class="contact-fv-subtitle">お問い合わせ</h2>
</div>
</section>

<!-- Main Content Wrapper -->
<div class="main-content-wrapper">
<div class="contact-content-inner">
    <!-- LINE Icon Section -->
    <section class="contact-line-section">
    <div class="section-container">
        <div class="contact-line-icon">
        <a href="https://lin.ee/fmCB85R" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon-line.png' ); ?>" alt="LINE" class="contact-line-img" loading="lazy" decoding="async">
        </a>
        </div>
        <p class="contact-line-text">または、以下のフォームからお問い合わせください。</p>
    </div>
    </section>

<!-- Contact Form Section -->
<section class="contact-form-section">
<div class="section-container">
    <form id="contact-form" class="contact-form" method="post" action="">
    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">お名前</span>
        <span class="contact-form-required">*</span>
        </label>
        <input type="text" name="name" class="contact-form-input contact-form-input-focus" placeholder="佐藤　優太" required>
        <span class="contact-form-error" role="alert"></span>
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">メールアドレス</span>
        <span class="contact-form-required">*</span>
        </label>
        <input type="email" name="email" class="contact-form-input" placeholder="XXXXXXXX@XXXXX.XX" required>
        <span class="contact-form-error" role="alert"></span>
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">業種・事業内容</span>
        <span class="contact-form-required">*</span>
        </label>
        <input type="text" name="business" class="contact-form-input" placeholder="XXXXXXXXX" required>
        <span class="contact-form-error" role="alert"></span>
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">ご希望の制作範囲</span>
        </label>
        <div class="contact-form-radio-group">
        <label class="contact-form-radio">
            <input type="radio" name="scope" value="design-only">
            <span class="contact-form-radio-label">デザインのみ</span>
        </label>
        <label class="contact-form-radio">
            <input type="radio" name="scope" value="design-to-publish">
            <span class="contact-form-radio-label">デザインから公開まで</span>
        </label>
        </div>
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">ご希望の制作物</span>
        </label>
        <div class="contact-form-radio-group">
        <label class="contact-form-radio">
            <input type="radio" name="product" value="homepage">
            <span class="contact-form-radio-label">ホームページ</span>
        </label>
        <label class="contact-form-radio">
            <input type="radio" name="product" value="lp">
            <span class="contact-form-radio-label">LP（ランディングページ）</span>
        </label>
        <label class="contact-form-radio">
            <input type="radio" name="product" value="other">
            <span class="contact-form-radio-label">その他</span>
        </label>
        </div>
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">ご希望の納期</span>
        </label>
        <input type="text" name="deadline" class="contact-form-input" placeholder="XX月末頃">
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">ご予算</span>
        </label>
        <input type="text" name="budget" class="contact-form-input" placeholder="XXXXXX円">
    </div>

    <div class="contact-form-field">
        <label class="contact-form-label">
        <span class="contact-form-label-text">ご相談・お問い合わせ内容</span>
        <span class="contact-form-required">*</span>
        </label>
        <textarea name="message" class="contact-form-textarea" placeholder="内容をご記入ください" rows="4" required></textarea>
        <span class="contact-form-error" role="alert"></span>
    </div>

    <div class="contact-form-field">
        <label class="contact-form-checkbox">
        <input type="checkbox" name="privacy" required>
        <span class="contact-form-checkbox-label">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacypolicy' ) ) ); ?>" class="contact-form-checkbox-link" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>に同意する
        </span>
        </label>
        <span class="contact-form-error" role="alert"></span>
    </div>
    </form>
</div>
</section>

<!-- Submit Button Section -->
<div class="contact-form-submit">
<button type="submit" class="contact-submit-button" form="contact-form">
    <span>送信する</span>
    <svg class="icon-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>
</div>
</div>

<?php get_template_part( 'template-parts/contact-section' ); ?>
</div>
</main>

<?php
get_footer();

