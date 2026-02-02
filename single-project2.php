<?php
/**
 * Template Name: Projects Page
 * /projects/{slug}/ 専用（header2, footer2、お問い合わせセクションなし）
 * /project/{slug}/ は single-project.php のまま変更なし
 *
 * @package Portfolio
 */

// project2 用：header2.php / footer2.php を使用（お問い合わせセクションなし）
locate_template( array( 'header2.php' ), true, true );
?>
<!-- single-project2 -->
<?php
// メインクエリの投稿をセット
if ( have_posts() ) {
  the_post();
}

// キャプションとタグを取得
$project_caption = get_field( 'キャプション' );
$project_tags = get_field( 'タグ' ); // 複数選択フィールドまたはテキストフィールド
?>

<main id="main" class="site-main">
  <!-- Project Detail FV Section -->
  <section class="project-detail-fv-section">
    <div class="project-detail-fv-background">
      <?php
      // 実績詳細ページではアイキャッチ画像を優先
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'full', array(
          'class' => 'project-detail-fv-bg-image',
          'loading' => 'eager',
          'fetchpriority' => 'high',
          'decoding' => 'async',
          'alt' => get_the_title()
        ) );
      } else {
        // フォールバック: ACFフィールドまたはカスタマイザーの設定
        $fv_image_id = portfolio_get_page_fv_image_id();
        if ( $fv_image_id ) {
          echo wp_get_attachment_image( $fv_image_id, 'full', false, array(
            'class' => 'project-detail-fv-bg-image',
            'loading' => 'eager',
            'fetchpriority' => 'high',
            'decoding' => 'async',
            'alt' => get_the_title()
          ) );
        }
      }
      ?>
      <div class="project-detail-fv-overlay"></div>
    </div>
    <div class="project-detail-fv-content">
      <h1 class="project-detail-fv-title"><?php the_title(); ?></h1>
      <?php if ( $project_caption ) : ?>
        <p class="project-detail-fv-caption"><?php echo esc_html( $project_caption ); ?></p>
      <?php endif; ?>
      <?php if ( $project_tags ) : ?>
        <div class="project-detail-tags">
          <?php
          if ( is_array( $project_tags ) ) {
            foreach ( $project_tags as $tag ) {
              $tag_label = is_array( $tag ) ? $tag['label'] : $tag;
              ?>
              <span class="project-detail-tag"><?php echo esc_html( $tag_label ); ?></span>
              <?php
            }
          } else {
            // カンマ区切りのテキストの場合
            $tags_array = explode( ',', $project_tags );
            foreach ( $tags_array as $tag ) {
              $tag = trim( $tag );
              if ( $tag ) {
                ?>
                <span class="project-detail-tag"><?php echo esc_html( $tag ); ?></span>
                <?php
              }
            }
          }
          ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- Main Content Wrapper -->
  <div class="main-content-wrapper project-detail-main-content">
    <div class="project-detail-content-inner">
      <!-- Project Detail Info Section -->
      <section class="project-detail-info-section">
      <div class="section-container">
        <div class="project-detail-fields">
            <?php
            // ACFフィールドの取得
            $project_url = get_field( 'url' );
            $project_period = get_field( '制作期間' );
            $project_purpose = get_field( '制作目的' );
            $project_challenge = get_field( '課題' );
            $project_target = get_field( 'ターゲット' );
            $project_point = get_field( '制作ポイント' );
            $project_material = get_field( '資料' );
            ob_start();
            echo do_shortcode( $project_material );
            $project_material_output = ob_get_clean();
            $project_image_1 = get_field( '画像01' );
            $project_image_2 = get_field( '画像02' );
            // Annotationフィールドを取得（大文字小文字を確認）
            $project_annotation = get_field( 'Annotation' );
            if ( ! $project_annotation ) {
              $project_annotation = get_field( 'annotation' ); // 小文字で試す
            }
            ?>

            <?php if ( $project_url ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">URL</h3>
                  <div class="project-detail-field-value">
                    <a href="<?php echo esc_url( $project_url ); ?>" target="_blank" rel="noopener noreferrer" class="project-detail-url-link">
                      <?php echo esc_html( $project_url ); ?>
                    </a>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( $project_period ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">制作期間</h3>
                  <div class="project-detail-field-value">
                    <p><?php echo esc_html( $project_period ); ?></p>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( $project_purpose ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">制作目的</h3>
                  <div class="project-detail-field-value">
                    <?php echo wp_kses_post( nl2br( $project_purpose ) ); ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( $project_challenge ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">課題</h3>
                  <div class="project-detail-field-value">
                    <?php echo wp_kses_post( nl2br( $project_challenge ) ); ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( $project_target ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">ターゲット</h3>
                  <div class="project-detail-field-value">
                    <?php echo wp_kses_post( nl2br( $project_target ) ); ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( $project_point ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <h3 class="project-detail-field-label">制作ポイント</h3>
                  <div class="project-detail-field-value">
                    <?php echo wp_kses_post( nl2br( $project_point ) ); ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if ( $project_material ) : ?>
              <div class="project-detail-field">
                <div class="project-detail-field-inner">
                  <div class="project-detail-field-value">
                    <div class="project-detail-material">
                      <div class="project-detail-material-embed">
                        <?php
                        // Googleスライドの埋め込みコードを許可して出力
                        // iframeの属性を許可するためにカスタムallowed_htmlを使用
                        $allowed_html = array(
                          'iframe' => array(
                            'src' => true,
                            'width' => true,
                            'height' => true,
                            'frameborder' => true,
                            'allowfullscreen' => true,
                            'mozallowfullscreen' => true,
                            'webkitallowfullscreen' => true,
                            'style' => true,
                            'class' => true,
                            'id' => true,
                          ),
                          'embed' => array(
                            'src' => true,
                            'width' => true,
                            'height' => true,
                            'type' => true,
                            'style' => true,
                            'class' => true,
                          ),
                          'object' => array(
                            'data' => true,
                            'width' => true,
                            'height' => true,
                            'type' => true,
                            'style' => true,
                            'class' => true,
                          ),
                        );
                        echo wp_kses( $project_material_output, $allowed_html );
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <?php if ( $project_image_1 || $project_image_2 ) : ?>
      <!-- Project Detail Media Section -->
      <section class="project-detail-media-section">
        <div class="section-container">
          <div class="project-detail-media-container">
              <?php if ( $project_image_1 ) : ?>
                <div class="project-detail-image-wrapper project-detail-image-first">
                  <?php
                  if ( is_array( $project_image_1 ) ) {
                    echo wp_get_attachment_image( $project_image_1['ID'], 'large', false, array(
                      'class' => 'project-detail-image',
                      'loading' => 'lazy',
                      'decoding' => 'async',
                      'alt' => $project_image_1['alt'] ?: get_the_title(),
                      'style' => 'object-fit: contain;'
                    ) );
                  } else {
                    echo wp_get_attachment_image( $project_image_1, 'large', false, array(
                      'class' => 'project-detail-image',
                      'loading' => 'lazy',
                      'decoding' => 'async',
                      'alt' => get_the_title(),
                      'style' => 'object-fit: contain;'
                    ) );
                  }
                  ?>
                </div>
              <?php endif; ?>

              <?php if ( $project_image_2 ) : ?>
                <div class="project-detail-image-wrapper">
                  <?php
                  if ( is_array( $project_image_2 ) ) {
                    echo wp_get_attachment_image( $project_image_2['ID'], 'large', false, array(
                      'class' => 'project-detail-image',
                      'loading' => 'lazy',
                      'decoding' => 'async',
                      'alt' => $project_image_2['alt'] ?: get_the_title(),
                      'style' => 'object-fit: contain;'
                    ) );
                  } else {
                    echo wp_get_attachment_image( $project_image_2, 'large', false, array(
                      'class' => 'project-detail-image',
                      'loading' => 'lazy',
                      'decoding' => 'async',
                      'alt' => get_the_title(),
                      'style' => 'object-fit: contain;'
                    ) );
                  }
                  ?>
                </div>
              <?php endif; ?>
            </div>
          </div>

          <?php 
          // デバッグ情報（開発中のみ表示）
          if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
            echo '<!-- Debug: Annotation value: ' . var_export( $project_annotation, true ) . ' -->';
          }
          if ( $project_annotation ) : ?>
            <p class="project-detail-note"><?php echo esc_html( $project_annotation ); ?></p>
          <?php endif; ?>

          <!-- Back Button（project2 用：/projects/ へ） -->
          <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="cta-button cta-button-back">
            <svg class="icon-arrow icon-arrow-left" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>戻る</span>
          </a>
        </div>
      </section>
    <?php endif; ?>
    </div>
  </div>
</main>

<?php
locate_template( array( 'footer2.php' ), true, true );
