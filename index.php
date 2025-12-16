<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="site-main">
  <?php
  if ( have_posts() ) :
    ?>
    <div class="main-content-wrapper">
      <section class="works-section">
        <div class="section-container">
          <div class="section-title-wrapper">
            <div class="section-title-group">
              <p class="section-label">Blog</p>
              <h2 class="section-title">投稿一覧</h2>
            </div>
            <div class="section-divider"></div>
          </div>

          <div class="projects-grid">
            <?php
            while ( have_posts() ) :
              the_post();
              ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'project-card fade-in' ); ?>>
                <a href="<?php the_permalink(); ?>" class="project-link">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="project-image">
                      <?php
                      the_post_thumbnail( 'large', array(
                        'class' => 'project-img',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'alt' => get_the_title()
                      ) );
                      ?>
                    </div>
                  <?php endif; ?>
                  <div class="project-info">
                    <h3 class="project-title"><?php the_title(); ?></h3>
                    <?php if ( has_excerpt() ) : ?>
                      <p class="project-description"><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    <?php endif; ?>
                  </div>
                </a>
              </article>
              <?php
            endwhile;
            ?>
          </div>

          <?php
          // ページネーション
          the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '前へ', 'portfolio' ),
            'next_text' => __( '次へ', 'portfolio' ),
          ) );
          ?>
        </div>
      </section>
    </div>
    <?php
  else :
    ?>
    <div class="main-content-wrapper">
      <section class="works-section">
        <div class="section-container">
          <p class="archive-no-projects"><?php esc_html_e( '投稿が見つかりませんでした。', 'portfolio' ); ?></p>
        </div>
      </section>
    </div>
    <?php
  endif;
  ?>
</main>

<?php
get_footer();









