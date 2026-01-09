<?php
/**
* The front page template file
*
* @package Portfolio
*/

get_header();
?>

<main id="main" class="site-main">
  <!-- FV Section (Hero) -->
  <section class="fv-section">
    <div class="fv-background">
      <video class="fv-bg-video" autoplay muted loop playsinline>
        <source src="<?php echo esc_url( get_template_directory_uri() . '/images/mv.mp4' ); ?>" type="video/mp4">
      </video>
      <div class="fv-overlay"></div>
    </div>
    <div class="fv-content">
      <h1 class="fv-title">
        <span>それぞれの"魅力",</span>
        <span>"想い"を最大限発揮させる。</span>
      </h1>
    </div>
  </section>

  <!-- Main Content Wrapper -->
  <div class="main-content-wrapper">
  <!-- Works Section -->
  <section class="works-section">
    <div class="section-container">
      <div class="section-title-wrapper">
        <div class="section-title-group">
          <p class="section-label">Work</p>
          <h2 class="section-title">制作実績</h2>
        </div>
        <div class="section-divider"></div>
      </div>

      <div class="projects-grid">
        <?php
        // get_posts()を使用してプロジェクトを取得
        $project_posts = get_posts( array(
          'post_type'      => 'project',
          'post_status'    => 'publish',
          'numberposts'    => 4,
          'orderby'        => 'date',
          'order'          => 'DESC',
        ) );

        // デバッグ情報（開発中のみ表示）
        if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
          echo '<!-- Debug: Found ' . count( $project_posts ) . ' projects -->';
        }

        if ( ! empty( $project_posts ) ) {
          global $post;
          foreach ( $project_posts as $post ) {
            setup_postdata( $post );
            $project_caption = get_field( 'キャプション' );
            ?>
            <article class="project-card fade-in">
              <a href="<?php the_permalink(); ?>" class="project-link">
                <div class="project-image">
                  <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large', array( 
                      'class' => 'project-img',
                      'loading' => 'lazy',
                      'decoding' => 'async'
                    ) );
                  } else {
                    ?>
                    <img src="https://www.figma.com/api/mcp/asset/405efe26-741e-498c-9d99-1b752dffce9e" alt="<?php the_title(); ?>" class="project-img" loading="lazy" decoding="async" width="485" height="320">
                    <?php
                  }
                  ?>
                </div>
                <div class="project-info">
                  <h3 class="project-title"><?php the_title(); ?></h3>
                  <?php if ( $project_caption ) : ?>
                    <p class="project-caption"><?php echo esc_html( $project_caption ); ?></p>
                  <?php endif; ?>
                </div>
              </a>
            </article>
            <?php
          }
          wp_reset_postdata();
        } else {
          // デバッグ: プロジェクトが見つからない場合の情報
          if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
            echo '<!-- Debug: No projects found. -->';
          }
          // プロジェクトが見つからない場合はメッセージを表示
          ?>
          <p class="no-projects-message">制作実績がありません。</p>
          <?php
        }
        ?>
      </div>

      <div class="works-cta">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="cta-button">
          <span>制作実績一覧へ</span>
          <svg class="icon-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Plan Section -->
  <section class="plan-section">
    <div class="section-container">
      <div class="plan-cards">
        <div class="plan-card fade-in">
          <div class="plan-content">
            <div class="plan-text-group">
              <p class="plan-label">ホームページ制作/販促物のデザイン制作をご希望の</p>
              <h3 class="plan-title">中小企業の経営者の方へ</h3>
            </div>
            <p class="plan-description">
              ホームページやLPを、一貫したブランドイメージでサポート。貴社の強みを活かす戦略的なデザインで、大手にも負けない存在感を創り出します。詳しい料金と内容は、制作プランをご覧ください。
            </p>
          </div>
          <a href="<?php echo esc_url( home_url( '/plan/' ) ); ?>" class="cta-button">
            <span>制作プランを見る</span>
            <svg class="icon-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          </a>
        </div>

        <div class="plan-card fade-in">
          <div class="plan-content">
            <div class="plan-text-group">
              <p class="plan-label">提携できるデザイナーをお探しの</p>
              <h3 class="plan-title">制作会社、マーケティング事業の方へ</h3>
            </div>
            <p class="plan-description">
              クライアントの想いや課題を深く掘り下げ、UI/UXの視点から"伝わるデザイン"を構築するだけでなく、柔軟なコミュニケーションを大切にし、プロジェクト全体を俯瞰しながら最適な形で伴走いたします。
            </p>
          </div>
          <a href="<?php echo esc_url( home_url( '/skills/' ) ); ?>" class="cta-button">
            <span>スキル・経歴を見る</span>
            <svg class="icon-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Me Section -->
  <section class="why-choose-section">
    <div class="section-container">
      <div class="section-title-wrapper">
        <div class="section-title-group">
          <p class="section-label">Why Choose Me</p>
          <h2 class="section-title">選ばれる理由</h2>
        </div>
        <div class="section-divider"></div>
      </div>

      <div class="why-choose-items">
        <div class="why-choose-item fade-in">
          <div class="why-choose-image">
            <?php
            $why_img_1_id = get_theme_mod( 'why_choose_image_1' );
            if ( $why_img_1_id && is_numeric( $why_img_1_id ) ) {
              echo wp_get_attachment_image( $why_img_1_id, 'large', false, array(
                'class' => 'why-img',
                'loading' => 'lazy',
                'decoding' => 'async',
                'alt' => 'Reason 01'
              ) );
            } else {
              // プレースホルダー画像
              echo '<div class="why-img" style="background-color: #eeeeee; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #999;">画像01</div>';
            }
            ?>
          </div>
          <div class="why-choose-content">
            <h3 class="why-choose-title">
              <span class="why-number">01</span>
              <span class="why-title-text">中小企業の経営者の方へ</span>
            </h3>
            <div class="why-choose-text">
              <p>見た目の美しさだけでは終わらせません。</p>
              <p>デザインのすべてには「目的」と「理由」があります。色、配置、余白、その一つひとつがビジネスの成果へつながる設計図です。</p>
              <p>「なぜこのデザインなのか」を論理的に説明できることが、信頼を生み、ブランドを強くします。</p>
              <p>感覚に頼らず、戦略に基づいたデザインで、成果を生み出す"確かな美"をご提案します。</p>
            </div>
          </div>
        </div>

        <div class="why-choose-item fade-in">
          <div class="why-choose-image">
            <?php
            $why_img_2_id = get_theme_mod( 'why_choose_image_2' );
            if ( $why_img_2_id && is_numeric( $why_img_2_id ) ) {
              echo wp_get_attachment_image( $why_img_2_id, 'large', false, array(
                'class' => 'why-img',
                'loading' => 'lazy',
                'decoding' => 'async',
                'alt' => 'Reason 02'
              ) );
            } else {
              // プレースホルダー画像
              echo '<div class="why-img" style="background-color: #eeeeee; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #999;">画像02</div>';
            }
            ?>
          </div>
          <div class="why-choose-content">
            <h3 class="why-choose-title">
              <span class="why-number">02</span>
              <span class="why-title-text">対話から生まれるデザイン</span>
            </h3>
            <div class="why-choose-text">
              <p>良いデザインは、良いコミュニケーションから。</p>
              <p>言葉の奥にある想いや理想を丁寧に汲み取り、共にゴールを描いていきます。</p>
              <p>課題を一緒に掘り下げ、ビジョンを形にする過程では、プロとしての経験から最適な方向性をご提案。</p>
              <p>この「対話を重ねるプロセス」こそが、スムーズな進行と想像を超える成果を生み出します。</p>
              <p>「頼んでよかった」と思っていただける、その瞬間まで伴走します。</p>
            </div>
          </div>
        </div>

        <div class="why-choose-item fade-in">
          <div class="why-choose-image">
            <?php
            $why_img_3_id = get_theme_mod( 'why_choose_image_3' );
            if ( $why_img_3_id && is_numeric( $why_img_3_id ) ) {
              echo wp_get_attachment_image( $why_img_3_id, 'large', false, array(
                'class' => 'why-img',
                'loading' => 'lazy',
                'decoding' => 'async',
                'alt' => 'Reason 03'
              ) );
            } else {
              // プレースホルダー画像
              echo '<div class="why-img" style="background-color: #eeeeee; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #999;">画像03</div>';
            }
            ?>
          </div>
          <div class="why-choose-content">
            <h3 class="why-choose-title">
              <span class="why-number">03</span>
              <span class="why-title-text">感性で魅せる、デザインの幅</span>
            </h3>
            <div class="why-choose-text">
              <p>アパレル時代に培った「見せ方」と「トレンド感覚」を活かし、上品・ナチュラル・ポップなど、さまざまなテイストに対応しています。</p>
              <p>どんなジャンルでも、世界観を大切にしながら"らしさ"を引き出すことが得意です。</p>
              <p>また、異なるテイストを組み合わせるような案件でも、全体のバランスをとりながら自然とまとまるデザインに仕上げます。</p>
              <p>感性と経験をかけ合わせて、見る人の記憶に残る表現をつくります。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/contact-section' ); ?>
  </div><!-- .main-content-wrapper -->
</main>

<?php
get_footer();
