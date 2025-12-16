<?php
/**
 * The template for displaying the Skills page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main">
<!-- Skills Page FV Section -->
<section class="skills-fv-section">
  <div class="skills-fv-background">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/1920.png' ); ?>" alt="Skills Background" class="skills-fv-bg-image" loading="eager" fetchpriority="high" decoding="async">
    <div class="skills-fv-overlay"></div>
  </div>
  <div class="skills-fv-content">
    <p class="skills-fv-label">提携できるデザイナーをお探しの</p>
    <h2 class="skills-fv-subtitle">制作会社、マーケティング事業の方へ</h2>
  </div>
</section>

<!-- Main Content Wrapper -->
<div class="main-content-wrapper">
  <div class="skills-content-inner">
    <!-- Introduction Section -->
    <section class="skills-intro-section">
      <div class="section-container">
        <div class="skills-intro-content">
          <h1 class="skills-intro-title">寄り添い、共に成長するデザインパートナーです。</h1>
          <div class="skills-intro-text">
            <p>私は、クライアントの想いや課題の本質を深く掘り下げ、UI/UXの視点から"伝わるデザイン"を構築することを得意としています。</p>
            <p>見た目の美しさだけでなく、体験価値・事業成長までを意識したデザインを提案します。</p>
            <p></p>
            <p>また、柔軟なコミュニケーションと戦略的な思考を大切にし、プロジェクト全体を俯瞰しながら最適な形で伴走いたします。</p>
            <p>御社のビジョンを共に描き、期待を超える成果をデザインの力で実現していく。</p>
            <p>そんな「信頼できるパートナー」でありたいと思っています。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-section">
      <div class="section-container">
        <div class="section-title-wrapper">
          <div class="section-title-group">
            <p class="section-label">Skills</p>
            <h2 class="section-title">スキル</h2>
          </div>
          <div class="section-divider"></div>
        </div>

        <div class="skills-grid">
          <?php
          $template_uri = get_template_directory_uri();
          $skill_uiux_url = esc_url( $template_uri . '/images/skill-uiux.png' );
          $skill_figma_url = esc_url( $template_uri . '/images/skill-figma.png' );
          $skill_ai_url = esc_url( $template_uri . '/images/skill-ai.png' );
          $skill_ps_url = esc_url( $template_uri . '/images/skill-ps.png' );
          ?>
          <div class="skill-item skill-item-uiux fade-in" style="background-image: url('<?php echo $skill_uiux_url; ?>'); background-position: 50% center; background-size: cover; background-repeat: no-repeat; background-color: lightgray;">
          </div>
          <div class="skill-item skill-item-figma fade-in" style="background-image: url('<?php echo $skill_figma_url; ?>'); background-position: 50% center; background-size: cover; background-repeat: no-repeat; background-color: #FFF;">
          </div>
          <div class="skill-item skill-item-ai fade-in" style="background-image: url('<?php echo $skill_ai_url; ?>'); background-position: 50% center; background-size: 58.294% 58.294%; background-repeat: no-repeat; background-color: #2E0402;">
          </div>
          <div class="skill-item skill-item-ps fade-in" style="border-radius: 103.75px; background-image: url('<?php echo $skill_ps_url; ?>'); background-position: 50% center; background-size: 58.294% 58.294%; background-repeat: no-repeat; background-color: #081E34;">
          </div>
          <?php
          $skill_wp_url = esc_url( $template_uri . '/images/skill-wp.png' );
          $skill_studio_url = esc_url( $template_uri . '/images/skill-studio.png' );
          $skill_artificialintelligence_url = esc_url( $template_uri . '/images/skill-artificialintelligence.png' );
          $skill_cursor_url = esc_url( $template_uri . '/images/skill-cursor.png' );
          ?>
          <div class="skill-item skill-item-wp fade-in" style="border-radius: 103.75px; background-image: url('<?php echo $skill_wp_url; ?>'); background-position: 50% center; background-size: cover; background-repeat: no-repeat; background-color: #FFF; box-shadow: 2px 2px 16px 0 rgba(0, 116, 154, 0.50);">
          </div>
          <div class="skill-item skill-item-studio fade-in" style="border-radius: 103.75px; background-image: url('<?php echo $skill_studio_url; ?>'); background-position: 50% center; background-size: cover; background-repeat: no-repeat; background-color: #FFF; box-shadow: 2px 2px 16px 0 rgba(0, 0, 0, 0.50);">
          </div>
          <div class="skill-item skill-item-artificialintelligence fade-in" style="border-radius: 103.75px; background-image: url('<?php echo $skill_artificialintelligence_url; ?>'); background-position: 50% center; background-size: 70%; background-repeat: no-repeat; background-color: #FFF; box-shadow: 2px 2px 16px 0 rgba(0, 0, 0, 0.50);">
          </div>
          <div class="skill-item skill-item-cursor fade-in" style="border-radius: 103.75px; background-image: url('<?php echo $skill_cursor_url; ?>'); background-position: 50% center; background-size: cover; background-repeat: no-repeat; box-shadow: 2px 2px 16px 0 rgba(0, 0, 0, 0.50);">
          </div>
        </div>
      </div>
    </section>

    <!-- Biography Section -->
    <section class="biography-section">
      <div class="section-container">
        <div class="section-title-wrapper">
          <div class="section-title-group">
            <p class="section-label">Biography</p>
            <h2 class="section-title">経歴</h2>
          </div>
          <div class="section-divider"></div>
        </div>

        <div class="biography-timeline">
          <div class="biography-item fade-in">
            <div class="biography-content">
              <div class="biography-box">
                <p class="biography-text">ESPエンタテイメント東京（旧ESPミュージカルアカデミーパフォーマンス科）にて、歌/ダンス/演技を学ぶ</p>
              </div>
            </div>
            <div class="biography-arrow">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10L20 30M20 30L10 20M20 30L30 20" stroke="#14212B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>

          <div class="biography-item fade-in">
            <div class="biography-content">
              <div class="biography-box">
                <p class="biography-text">アパレル業界にて6年間、販売からスタートし、売上/人材マネジメントを経験</p>
                <p class="biography-text">地域に合った戦略を提案し、売上前年度比15%アップに成功</p>
                <p class="biography-text">また、新店舗立ち上げも経験しリーダシップを務めたが、EC業界的の成長とリアル店舗の売り上げ衰退を機にキャリアチェンジ</p>
              </div>
            </div>
            <div class="biography-arrow">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10L20 30M20 30L10 20M20 30L30 20" stroke="#14212B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>

          <div class="biography-item fade-in">
            <div class="biography-content">
              <div class="biography-box">
                <p class="biography-text">SES企業に、WEB,UI/UXデザイナーとして転職。柔軟性と即戦力を求められる環境下で、大手〜中小企業まで幅広い業界との業務を経験</p>
                <p class="biography-text">業務はデザインのみでなく、要件定義やWF作成、コーディングやCMS構築など多岐に渡る。</p>
              </div>
            </div>
            <div class="biography-arrow">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10L20 30M20 30L10 20M20 30L30 20" stroke="#14212B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>

          <div class="biography-item fade-in">
            <div class="biography-content">
              <div class="biography-box">
                <p class="biography-text">現在は独立をし、WEB,UI/UXデザイナーとして、WEB制作に従事しております。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <div class="section-container">
        <div class="section-title-wrapper">
          <div class="section-title-group">
            <p class="section-label">FAQ</p>
            <h2 class="section-title">よくある質問</h2>
          </div>
          <div class="section-divider"></div>
        </div>

        <div class="faq-list">
          <div class="faq-item fade-in">
            <h3 class="faq-question">制作範囲はどこまで対応できますか？</h3>
            <div class="faq-answer-box">
              <p class="faq-answer">WEBサイトを中心とした、設計〜デザイン、実装に対応しております。</p>
              <p class="faq-answer">WordpressやSTUDIOなどのノーコードも対応可能です。</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <h3 class="faq-question">デザインのみの発注や、チームへの参加も可能ですか？</h3>
            <div class="faq-answer-box">
              <p class="faq-answer">デザインのみのご依頼も承っております。プロジェクトの一員として、お客様のチームに参加することも可能です。</p>
              <p class="faq-answer">お気軽にご相談ください。</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <h3 class="faq-question">複数のプロジェクトを同時に依頼することは可能でしょうか？</h3>
            <div class="faq-answer-box">
              <p class="faq-answer">問題ございません。ただし、品質の担保と納期の観点から、受注可能な量には限りがございます。</p>
              <p class="faq-answer">ご依頼いただく際は、事前に全体のスケジュールとプライオリティーについて、ご相談させていただきます。</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <h3 class="faq-question">どのような業界や分野のデザイン経験がありますか？</h3>
            <div class="faq-answer-box">
              <p class="faq-answer">幅広い業界のクライアント様とお仕事をさせていただいております。主な経験分野には以下が含まれます：</p>
              <p class="faq-answer"></p>
              <p class="faq-answer">・ITサービス</p>
              <p class="faq-answer">・不動産/建設</p>
              <p class="faq-answer">・ホテル</p>
              <p class="faq-answer">・美容</p>
              <p class="faq-answer">・教育</p>
              <p class="faq-answer"></p>
              <p class="faq-answer">新しい業界や分野のプロジェクトにも積極的にチャレンジしています。業界特有の知識やトレンドについては、プロジェクト開始時にリサーチを行い、クライアント様のご指導も仰ぎながら最適なデザインを提供いたします。</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <h3 class="faq-question">どのような連絡ツールを使用していますか？</h3>
            <div class="faq-answer-box">
              <p class="faq-answer">クライアント様のご希望や既存のワークフローに合わせて、柔軟に対応いたします。</p>
              <p class="faq-answer">一般的に以下のツールを使用していますが、これらに限定されるものではありません。</p>
              <p class="faq-answer"></p>
              <p class="faq-answer">・Slack</p>
              <p class="faq-answer">・Zoom</p>
              <p class="faq-answer">・Google Meet</p>
              <p class="faq-answer">・Gmail</p>
              <p class="faq-answer">・Notion</p>
              <p class="faq-answer"></p>
              <p class="faq-answer">コミュニケーションの頻度や方法については、プロジェクトの開始時にご相談の上、最適な形を決定いたします。</p>
              <p class="faq-answer">円滑な情報共有と効率的な協働を実現するため、柔軟に対応いたしますので、お気軽にご要望をお聞かせください。</p>
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

