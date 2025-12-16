<?php
/**
 * The template for displaying the Privacy Policy page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main page-template-page-privacy-policy">
  <!-- Privacy Policy Page FV Section -->
  <section class="privacy-fv-section">
      <div class="privacy-fv-background">
        <div class="privacy-fv-overlay"></div>
      </div>
      <div class="privacy-fv-content">
        <h2 class="privacy-fv-subtitle">プライバシーポリシー</h2>
      </div>
  </section>

  <!-- Main Content Wrapper -->
  <div class="main-content-wrapper project-detail-main-content">
    <div class="project-detail-content-inner">
      <!-- Privacy Policy Info Section -->
      <section class="project-detail-info-section">
        <div class="section-container">
          <div class="project-detail-fields">
            <?php
            while ( have_posts() ) :
              the_post();
              ?>
              
              <!-- 導入文 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <div class="project-detail-field-value">
                    <p>
                      並木 遼太(以下、当デザイナーという)は、個人情報取扱事業者として、個人情報の保護に関連する法令を誠実に遵守し、お客様からご提供いただく個人情報の管理・運営を行ってまいります。
                    </p>
                  </div>
                </div>
              </div>

              <!-- 1. 個人情報の取得 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">1. 個人情報の取得</h3>
                  <div class="project-detail-field-value">
                    <p>当デザイナーが個人情報を取得する場合には情報主体者(以下、本人という)に利用目的をあらかじめお知らせした上で、その目的の達成に必要な範囲の情報のみを適法かつ公正な手段で取得いたします。</p>
                  </div>
                </div>
              </div>

              <!-- 2. 個人情報の利用 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">2. 個人情報の利用</h3>
                  <div class="project-detail-field-value">
                    <p>当デザイナーは個人情報を取得の際に本人にお知らせする目的の範囲内で利用します。お知らせした目的の範囲を超えて利用する必要が生じた場合は新たな利用目的をご連絡した上で、ご同意いただけた場合のみ利用します。ただし、個人が特定できない形でデータの統計をとるために利用する場合があります。</p>
                  </div>
                </div>
              </div>

              <!-- 3. 第三者への情報提供 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">3. 第三者への情報提供</h3>
                  <div class="project-detail-field-value">
                    <p>あらかじめ本人より同意を得ない限り法令に定める場合を除いて、第三者に個人情報を提供することはありません。</p>
                  </div>
                </div>
              </div>

              <!-- 4. 個人情報の正確性および安全性の確保 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">4. 個人情報の正確性および安全性の確保</h3>
                  <div class="project-detail-field-value">
                    <p>個人情報の正確性および安全性を確保するため、安全対策を実施し個人情報への不正アクセスまたは個人情報の紛失、破壊、改ざん、および漏えい等の予防ならびに是正に努めます。</p>
                  </div>
                </div>
              </div>

              <!-- 5. 外部との業務委託 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">5. 外部との業務委託</h3>
                  <div class="project-detail-field-value">
                    <p>当デザイナーはお客様によりよいサービスを提供するため、個人情報の全部又は一部を外部に委託することがあります。業務委託契約を締結する際には、委託先に個人情報保護方針の遵守を義務付け、委託先に対する管理・監督を徹底いたします。</p>
                  </div>
                </div>
              </div>

              <!-- 6. 法令等の遵守 -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">6. 法令等の遵守</h3>
                  <div class="project-detail-field-value">
                    <p>当デザイナーは個人情報の取扱いにおいて、当該個人情報の保護に適用される法令及び関連するガイドライン・その他の規範を遵守します。</p>
                  </div>
                </div>
              </div>

              <!-- 7. 個人情報に関するお問い合わせ -->
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">7. 個人情報に関するお問い合わせ</h3>
                  <div class="project-detail-field-value">
                    <p>「プライバシーポリシーに関するお問い合わせ」は以下からお問い合わせください。</p>
                    <p style="margin-top: 16px;">並木 遼太</p>
                    <p>
                      <a href="mailto:rnstyle.official@gmail.com" style="color: #156AD1; text-decoration: none;">rnstyle.official@gmail.com</a>
                    </p>
                  </div>
                </div>
              </div>

              <?php
            endwhile;
            ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php
get_footer();

