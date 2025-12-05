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
		<?php echo do_shortcode( '[contact-form-7 id="ad37063" title="コンタクトフォーム"]' ); ?>
	</div>
</section>

<?php get_template_part( 'template-parts/contact-section' ); ?>
</div>
</main>

<?php
get_footer();

