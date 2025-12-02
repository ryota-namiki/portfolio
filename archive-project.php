<?php
/**
* The template for displaying project archive pages
*
* @package Portfolio
*/

get_header();
?>

<main id="main" class="site-main">
  <!-- Archive FV Section -->
  <section class="archive-fv-section">
    <div class="archive-fv-background">
      <?php
      $fv_image_id = portfolio_get_page_fv_image_id();
      if ( $fv_image_id ) {
        echo wp_get_attachment_image( $fv_image_id, 'full', false, array(
          'class' => 'archive-fv-bg-image',
          'loading' => 'eager',
          'fetchpriority' => 'high',
          'decoding' => 'async',
          'alt' => 'Archive Background'
        ) );
      } else {
        // フォールバック: カスタマイザーの設定を使用
        $archive_fv_bg = portfolio_get_image_url( 'fv_background_image', 'full' );
        if ( $archive_fv_bg ) {
          echo '<img src="' . esc_url( $archive_fv_bg ) . '" alt="Archive Background" class="archive-fv-bg-image" loading="eager" fetchpriority="high" decoding="async">';
        }
      }
      ?>
      <div class="archive-fv-overlay"></div>
    </div>
  </section>

  <!-- Projects Archive Content -->
  <div class="archive-content-wrapper">
    <section class="archive-projects-section">
      <div class="archive-container">
        <!-- Section Title -->
        <div class="archive-section-title-wrapper">
          <div class="archive-section-title-group">
            <p class="archive-section-label">Work</p>
            <h1 class="archive-section-title">制作実績</h1>
          </div>
          <div class="archive-section-divider"></div>
        </div>

        <!-- Projects Grid -->
        <div class="archive-projects-grid">
          <?php
          $projects_query = new WP_Query( array(
            'post_type'      => 'project',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'suppress_filters' => false,
          ) );

          if ( $projects_query->have_posts() ) {
            while ( $projects_query->have_posts() ) {
              $projects_query->the_post();
              $project_caption = get_field( 'キャプション' );
              ?>
              <article class="archive-project-card fade-in">
                <a href="<?php the_permalink(); ?>" class="archive-project-link">
                  <div class="archive-project-image">
                    <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail( 'large', array(
                        'class' => 'archive-project-img',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'alt' => get_the_title()
                      ) );
                    } else {
                      ?>
                      <img src="https://www.figma.com/api/mcp/asset/405efe26-741e-498c-9d99-1b752dffce9e" alt="<?php the_title(); ?>" class="archive-project-img" loading="lazy" decoding="async" width="485" height="320">
                      <?php
                    }
                    ?>
                  </div>
                  <div class="archive-project-info">
                    <h3 class="archive-project-title"><?php the_title(); ?></h3>
                    <?php if ( $project_caption ) : ?>
                      <p class="archive-project-caption"><?php echo esc_html( $project_caption ); ?></p>
                    <?php endif; ?>
                    <?php if ( has_excerpt() ) : ?>
                      <p class="archive-project-description"><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    <?php endif; ?>
                  </div>
                </a>
              </article>
              <?php
            }
            wp_reset_postdata();
          } else {
            ?>
            <p class="archive-no-projects"><?php esc_html_e( 'No projects found.', 'portfolio' ); ?></p>
            <?php
          }
          ?>
        </div>
      </div>
    </section>

    <?php get_template_part( 'template-parts/contact-section' ); ?>
  </div>
</main>

<?php
get_footer();
