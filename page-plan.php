<?php
/**
 * The template for displaying the Plan page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main">
<!-- Plan Page FV Section -->
<section class="plan-fv-section">
  <div class="plan-fv-background">
    <?php
    $fv_image_id = portfolio_get_page_fv_image_id();
    if ( $fv_image_id ) {
      echo wp_get_attachment_image( $fv_image_id, 'full', false, array(
        'class' => 'plan-fv-bg-image',
        'loading' => 'eager',
        'fetchpriority' => 'high',
        'decoding' => 'async',
        'alt' => get_the_title()
      ) );
    } else {
      $plan_fv_bg = portfolio_get_image_url( 'fv_background_image', 'full' );
      if ( $plan_fv_bg ) {
        echo '<img src="' . esc_url( $plan_fv_bg ) . '" alt="Plan Background" class="plan-fv-bg-image" loading="eager" fetchpriority="high" decoding="async">';
      }
    }
    ?>
    <div class="plan-fv-overlay"></div>
  </div>
  <div class="skills-fv-content">
    <p class="skills-fv-label">WEBサイト、LP制作をご希望の</p>
    <h2 class="skills-fv-subtitle">中小企業様へ</h2>
  </div>
</section>

<!-- Main Content Wrapper -->
<div class="main-content-wrapper">
  <div class="plan-content-inner">
    <!-- Introduction Section -->
    <section class="plan-intro-section">
      <div class="section-container">
        <div class="plan-intro-content">
          <h1 class="plan-intro-title">それぞれの魅力、想いを最大限発揮させることを第一に考えております。</h1>
          <p class="plan-intro-text">新規サイトの制作から既存サイトのリニューアル、保守・運用まで、一貫したブランド体験をデザインいたします。</p>
        </div>
      </div>
    </section>

    <!-- Service Content Section -->
    <section class="plan-service-section">
      <div class="section-container">
        <div class="section-title-wrapper">
          <div class="section-title-group">
            <p class="section-label">Service</p>
            <h2 class="section-title">サービス内容</h2>
          </div>
          <div class="section-divider"></div>
        </div>

        <div class="service-cards">
          <div class="service-card fade-in">
            <div class="service-image">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/service01.png' ); ?>" alt="HP制作" class="service-img" loading="lazy" decoding="async">
            </div>
            <div class="service-content">
              <h3 class="service-title">HP制作</h3>
              <p class="service-description">お客様の魅力、想いに寄り添ったホームページを制作いたします。デザイン性だけでなく、論理的な作りを心がけております。</p>
            </div>
          </div>

          <div class="service-card fade-in">
            <div class="service-image">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/service02.png' ); ?>" alt="LP制作" class="service-img" loading="lazy" decoding="async">
            </div>
            <div class="service-content">
              <h3 class="service-title">LP制作</h3>
              <p class="service-description">ターゲットユーザーに届くデザインと構成で、効果的なランディングページ（LP）の制作を承ります。</p>
            </div>
          </div>

          <div class="service-card fade-in">
            <div class="service-image">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/service03.png' ); ?>" alt="保守・運用" class="service-img" loading="lazy" decoding="async">
            </div>
            <div class="service-content">
              <h3 class="service-title">保守・運用</h3>
              <p class="service-description">制作して終わりではなく、サイトの更新など、長きにわたるパートナーでありたいと考えております。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Plan Cards Section -->
    <section class="plan-cards-section">
      <div class="section-container">
        <div class="section-title-wrapper">
          <div class="section-title-group">
            <p class="section-label">Plan</p>
            <h2 class="section-title">制作プラン</h2>
          </div>
          <div class="section-divider"></div>
        </div>

        <div class="plan-tabs fade-in">
          <button class="plan-tab active" data-tab="lp">LP制作</button>
          <button class="plan-tab" data-tab="hp">HP制作</button>
        </div>

        <!-- LP制作プラン -->
        <div class="plan-cards-container" data-plan-type="lp">
          <div class="plan-card-item fade-in">
            <div class="plan-card-header">
              <p class="plan-card-label">Light</p>
              <h3 class="plan-card-title">ライト</h3>
            </div>
            <div class="plan-card-details">
              <div class="plan-detail-row">
                <span class="plan-detail-label">料金</span>
                <span class="plan-detail-value">15万円(税別)</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">ページ数</span>
                <span class="plan-detail-value">1ページ</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">制作期間</span>
                <span class="plan-detail-value">2週間〜1ヶ月</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">修正回数</span>
                <span class="plan-detail-value">制作期間中2回まで</span>
              </div>
            </div>
          </div>

          <div class="plan-card-item plan-card-featured fade-in">
            <div class="plan-card-header">
              <p class="plan-card-label">Standard</p>
              <h3 class="plan-card-title">スタンダード</h3>
            </div>
            <div class="plan-card-details">
              <div class="plan-detail-row">
                <span class="plan-detail-label">料金</span>
                <span class="plan-detail-value">30万円(税別)</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">ページ数</span>
                <span class="plan-detail-value">1ページ</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">制作期間</span>
                <span class="plan-detail-value">1ヶ月〜1.5ヶ月</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">修正回数</span>
                <span class="plan-detail-value">制作期間中2回まで</span>
              </div>
            </div>
          </div>

          <div class="plan-card-item fade-in">
            <div class="plan-card-header">
              <p class="plan-card-label">Pro</p>
              <h3 class="plan-card-title">プロ</h3>
            </div>
            <div class="plan-card-details">
              <div class="plan-detail-row">
                <span class="plan-detail-label">料金</span>
                <span class="plan-detail-value">50万円(税別)</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">ページ数</span>
                <span class="plan-detail-value">1ページ</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">制作期間</span>
                <span class="plan-detail-value">1ヶ月〜2ヶ月</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">修正回数</span>
                <span class="plan-detail-value">完了2週間前まで無制限</span>
              </div>
            </div>
          </div>
        </div>

        <!-- HP制作プラン -->
        <div class="plan-cards-container" data-plan-type="hp" style="display: none;">
          <div class="plan-card-item fade-in">
            <div class="plan-card-header">
              <p class="plan-card-label">Light</p>
              <h3 class="plan-card-title">ライト</h3>
            </div>
            <div class="plan-card-description">
              <p>気軽に作りたい、小規模なビジネスを始めた方におすすめ。</p>
            </div>
            <div class="plan-card-details">
              <div class="plan-detail-row">
                <span class="plan-detail-label">料金</span>
                <span class="plan-detail-value">30万円(税別)</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">ページ数</span>
                <span class="plan-detail-value">3〜5ページ</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">制作期間</span>
                <span class="plan-detail-value">1ヶ月</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">修正回数</span>
                <span class="plan-detail-value">制作期間中2回まで</span>
              </div>
            </div>
          </div>

          <div class="plan-card-item plan-card-featured fade-in">
            <div class="plan-card-header">
              <p class="plan-card-label">Standard</p>
              <h3 class="plan-card-title">スタンダード</h3>
            </div>
            <div class="plan-card-description">
              <p>基本的なページが揃ったサイトがいち早く欲しい方におすすめ。</p>
            </div>
            <div class="plan-card-details">
              <div class="plan-detail-row">
                <span class="plan-detail-label">料金</span>
                <span class="plan-detail-value">50万円(税別)</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">ページ数</span>
                <span class="plan-detail-value">5〜10ページ</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">制作期間</span>
                <span class="plan-detail-value">2ヶ月</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">修正回数</span>
                <span class="plan-detail-value">制作期間中2回まで</span>
              </div>
            </div>
          </div>

          <div class="plan-card-item fade-in">
            <div class="plan-card-header">
              <p class="plan-card-label">Pro</p>
              <h3 class="plan-card-title">プロ</h3>
            </div>
            <div class="plan-card-description">
              <p>ボリューム感あるサイトが欲しい方<br>　</p>
            </div>
            <div class="plan-card-details">
              <div class="plan-detail-row">
                <span class="plan-detail-label">料金</span>
                <span class="plan-detail-value">100万円(税別)</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">ページ数</span>
                <span class="plan-detail-value">10ページ〜</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">制作期間</span>
                <span class="plan-detail-value">2ヶ月以上</span>
              </div>
              <div class="plan-detail-row">
                <span class="plan-detail-label">修正回数</span>
                <span class="plan-detail-value">完了2週間前まで無制限</span>
              </div>
            </div>
          </div>
        </div>

        <div class="plan-cta fade-in">
          <a href="https://ryotanamiki-design-price.notion.site/296b38bbbfbf80bb81adf6a2cece970c?source=copy_link" class="cta-button plan-price-button" target="_blank" rel="noopener noreferrer">
            <span>詳しい料金はこちら</span>
            <svg class="icon-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Plan Process Section -->
    <section class="plan-process-section">
      <div class="section-container">
        <div class="section-title-wrapper">
          <div class="section-title-group">
            <p class="section-label">Flow</p>
            <h2 class="section-title">ご依頼・制作の流れ</h2>
          </div>
          <div class="section-divider"></div>
        </div>

        <div class="process-steps">
          <div class="process-step fade-in">
            <div class="step-number">Step1</div>
            <div class="step-content">
              <h3 class="step-title">お問い合わせ</h3>
              <div class="step-description-box">
                <p>お問い合わせフォーム、または公式LINE、Slackからお気軽にご相談ください。</p>
                <p>依頼するか迷っている状況でも構いません。どのようなお悩みやご要望をお持ちか、簡単にお聞かせいただければと思います。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step2</div>
            <div class="step-content">
              <h3 class="step-title">ヒアリング</h3>
              <div class="step-description-box">
                <p>良い制作物は、お客様との会話の中からも生まれます。お話をじっくり伺い、どのようなデザインが必要か一緒に考えて行きたいと考えております。オンライン、オフライン問わず対応可能ですので、お気軽にご相談ください。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step3</div>
            <div class="step-content">
              <h3 class="step-title">ご提案・お見積り</h3>
              <div class="step-description-box">
                <p>ヒアリング内容をもとに、最適なプランをご提案いたします。イメージ、ご要望に合わせたお見積りもお出しいたします。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step4</div>
            <div class="step-content">
              <h3 class="step-title">ご契約・着手金のお支払い</h3>
              <div class="step-description-box">
                <p>ご契約後は、スムーズに制作を進めてまいります。</p>
                <p>制作開始に際しては、着手金としてお見積額の50%を事前にお振込いただきます。入金が確認でき次第、制作作業に着手いたします。</p>
                <p>これにより、双方が安心できる形でプロジェクトをスタートさせることができます。ご理解ください。</p>
                <p>残金は、制作完了時にご請求させていただきます。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step5</div>
            <div class="step-content">
              <h3 class="step-title">制作</h3>
              <div class="step-description-box">
                <p>進捗状況を随時ご報告し、お客様とのコミュニケーションを取りながら進めてまいりますので、ご安心ください。</p>
                <p class="step-note">※頻度についてはご相談させていただければと思います。</p>
                
                <div class="process-detail-box">
                  <div class="process-detail-header">
                    <h4 class="process-detail-title">制作の詳細な流れ</h4>
                    <button class="process-detail-toggle" aria-label="展開/折りたたみ">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                  </div>
                  <div class="process-detail-content">
                    <div class="process-detail-item">
                      <h5 class="process-detail-item-title">競合リサーチ（オプション）</h5>
                      <p class="process-detail-item-text">ご希望に応じて、競合分析を行います。これにより、より効果的なデザイン方針を立てることができます。</p>
                    </div>
                    <div class="process-detail-item">
                      <h5 class="process-detail-item-title">構成、コンテンツ内容の決定</h5>
                      <p class="process-detail-item-text">サイト全体の構成や掲載内容を決定します。この段階で丁寧なヒアリングを行い、目的に最適化された情報設計を仕上げていきます。素材のご提供・文言作成・参考サイトすり合わせもこの段階で行います。</p>
                    </div>
                    <div class="process-detail-item">
                      <h5 class="process-detail-item-title">ワイヤーフレーム（構成ラフ）の制作</h5>
                      <p class="process-detail-item-text">確定した構成をもとに、ページのラフデザインを作成します。レイアウトや主要要素の位置関係を視覚的に確認していただきます。</p>
                    </div>
                    <div class="process-detail-item">
                      <h5 class="process-detail-item-title">デザイン制作</h5>
                      <p class="process-detail-item-text">承認いただいたワイヤーフレームを基に、ビジュアルデザインを具体化します。配色・フォント・画像などを精密に調整し、ブランドや目的に合った魅力的なデザインを構築します。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step6</div>
            <div class="step-content">
              <h3 class="step-title">お客様による最終確認</h3>
              <div class="step-description-box">
                <p>全ての調整が完了後、最終確認をいただき完了となります。</p>
                <p>誤字やデザインのちょっとした違和感など、気になる点がございましたらお知らせください。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step7</div>
            <div class="step-content">
              <h3 class="step-title">残制作費のお支払い</h3>
              <div class="step-description-box">
                <p>残りの制作費のお支払いをお願いいたします。</p>
                <p>お支払いの期限は、通常、請求書発行から2週間以内とさせていただきます。特別なご事情がある場合は、ご相談ください。</p>
                <p>銀行振込にてお支払いをお願いいたします。お支払いの確認ができ次第、次のステップに移行いたしますので、スムーズなお手続きをお願いいたします。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step8</div>
            <div class="step-content">
              <h3 class="step-title">サイト公開作業</h3>
              <div class="step-description-box">
                <p>お支払い確認後、サイトの公開作業を進めます。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step9</div>
            <div class="step-content">
              <h3 class="step-title">納品</h3>
              <div class="step-description-box">
                <p>公開作業が問題なく完了しましたら、納品とさせていただきます。</p>
              </div>
            </div>
          </div>

          <div class="process-step fade-in">
            <div class="step-number">Step10</div>
            <div class="step-content">
              <h3 class="step-title">お客様アンケートのご協力</h3>
              <div class="step-description-box">
                <p>納品後、お客様のご意見を参考に今後のサービス向上を図るため、アンケートへのご協力をお願いしております。デザインや対応についてのご感想や改善点など、率直なフィードバックをいただければ幸いです。</p>
                <p>今後とも長期的なパートナーとしてお付き合いいただければ嬉しく思います。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php get_template_part( 'template-parts/contact-section' ); ?>
</div>
</main>

<?php
get_footer();

