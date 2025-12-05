<?php
/**
 * The template for displaying the Thanks page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main">
<!-- Thanks Page FV Section -->
<section class="thanks-fv-section">
<div class="thanks-fv-background">
<?php
$fv_image_id = portfolio_get_page_fv_image_id();
if ( $fv_image_id ) {
    echo wp_get_attachment_image( $fv_image_id, 'full', false, array(
    'class' => 'thanks-fv-bg-image',
    'loading' => 'eager',
    'fetchpriority' => 'high',
    'decoding' => 'async',
    'alt' => get_the_title()
    ) );
} else {
    $thanks_fv_bg = portfolio_get_image_url( 'fv_background_image', 'full' );
    if ( $thanks_fv_bg ) {
    echo '<img src="' . esc_url( $thanks_fv_bg ) . '" alt="Thanks Background" class="thanks-fv-bg-image" loading="eager" fetchpriority="high" decoding="async">';
    }
}
?>
<div class="thanks-fv-overlay"></div>
	</div>
		<div class="thanks-fv-content">
		<p class="thanks-fv-label">お問い合わせありがとうございます</p>
		<h2 class="thanks-fv-subtitle">送信完了</h2>
	</div>
</section>

<!-- Main Content Wrapper -->
<div class="main-content-wrapper">
<div class="thanks-content-inner">
<!-- Thanks Message Section -->
	<section class="thanks-message-section">
		<div class="section-container">
			<div class="thanks-message-content">
				<h1 class="thanks-message-title">お問い合わせありがとうございます</h1>
				<div class="thanks-message-text">
					<p>この度は、お問い合わせいただき誠にありがとうございます。</p>
					<p>お送りいただいた内容を確認させていただき、2〜3営業日以内にご返信させていただきます。</p>
					<p>お急ぎの場合は、LINEにてお問い合わせください。</p>
					<p>今後ともよろしくお願いいたします。</p>
				</div>
				<!-- LINE Icon Section -->
				<div class="thanks-line-section">
					<div class="section-container">
						<div class="thanks-line-icon">
							<a href="https://lin.ee/fmCB85R" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon-line.png' ); ?>" alt="LINE" class="thanks-line-img" loading="lazy" decoding="async">
							</a>
						</div>
					</div>
				</div>
				<div class="thanks-action-buttons">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="thanks-button thanks-button-secondary">
							ホームに戻る
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

</div>
</main>

<?php
get_footer();

