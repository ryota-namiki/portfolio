<?php
/**
 * The template for displaying the Privacy Policy page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main">
  <!-- Privacy Policy Page FV Section -->
  <section class="privacy-fv-section">
    <div class="privacy-fv-background">
      <?php
      $fv_image_id = portfolio_get_page_fv_image_id();
      if ( $fv_image_id ) {
        echo wp_get_attachment_image( $fv_image_id, 'full', false, array(
          'class' => 'privacy-fv-bg-image',
          'loading' => 'eager',
          'fetchpriority' => 'high',
          'decoding' => 'async',
          'alt' => get_the_title()
        ) );
      } else {
        $privacy_fv_bg = portfolio_get_image_url( 'fv_background_image', 'full' );
        if ( $privacy_fv_bg ) {
          echo '<img src="' . esc_url( $privacy_fv_bg ) . '" alt="Privacy Policy Background" class="privacy-fv-bg-image" loading="eager" fetchpriority="high" decoding="async">';
        }
      }
      ?>
      <div class="privacy-fv-overlay"></div>
    </div>
    <div class="privacy-fv-content">
      <h2 class="privacy-fv-subtitle">プライバシーポリシー</h2>
    </div>
  </section>

  <!-- Main Content Wrapper -->
  <div class="main-content-wrapper">
    <div class="privacy-content-inner">
      <!-- Privacy Policy Content Section -->
      <section class="privacy-content-section">
        <div class="section-container">
          <div class="privacy-content">
            <div class="privacy-text">
              <p>並木　遼太（以下、当デザイナーという）は、個人情報取扱事業者として、個人情報の保護に関連する法令を誠実に遵守し、お客様からご提供いただく個人情報の管理・運営を行ってまいります。</p>
              
              <p><strong>1. 個人情報の取得</strong></p>
              <p>当デザイナーが個人情報を取得する場合には情報主体者（以下、本人という）に利用目的をあらかじめお知らせした上で、その目的の達成に必要な範囲の情報のみを適法かつ公正な手段で取得いたします。</p>
              
              <p><strong>2. 個人情報の利用</strong></p>
              <p>当デザイナーは個人情報を取得の際に本人にお知らせする目的の範囲内で利用します。お知らせした目的の範囲を超えて利用する必要が生じた場合は新たな利用目的をご連絡した上で、ご同意いただけた場合のみ利用します。 ただし、個人が特定できない形でデータの統計をとるために利用する場合があります。</p>
              
              <p><strong>3. 第三者への情報提供</strong></p>
              <p>あらかじめ本人より同意を得ない限り法令に定める場合を除いて、第三者に個人情報を提供することはありません。</p>
              
              <p><strong>4. 個人情報の正確性および安全性の確保</strong></p>
              <p>個人情報の正確性および安全性を確保するため,安全対策を実施し個人情報への不正アクセスまたは個人情報の紛失、破壊、改ざん、および漏えい等の予防ならびに是正に努めます。</p>
              
              <p><strong>5. 外部との業務委託</strong></p>
              <p>当デザイナーはお客様によりよいサービスを提供するため、個人情報の全部又は一部を外部に委託することがあります。業務委託契約を締結する際には、委託先に個人情報保護方針の遵守を義務付け、委託先に対する管理・監督を徹底いたします。</p>
              
              <p><strong>6. 法令等の遵守</strong></p>
              <p>当デザイナーは個人情報の取扱いにおいて、当該個人情報の保護に適用される法令及び関連するガイドライン・その他の規範を遵守します。</p>
              
              <p><strong>7. 個人情報に関するお問い合わせ</strong></p>
              <p>「プライバシーポリシーに関するお問い合わせ」は以下からお問い合わせください。</p>
              
              <p>並木　遼太<br>
              rnstyle.official@gmail.com</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php
get_footer();

