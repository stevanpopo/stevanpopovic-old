<?php
/**
 * The template for displaying Tag pages
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
      <div class="post">
        <div class="columns">
          <div class="column is-10-desktop">
            <div class="columns is-multiline">
              <?php if ( have_posts() ) : ?>

                <h1>Tag: <?php single_tag_title(); ?></h1>

              <?php while ( have_posts() ) : the_post(); ?>
                <article class="columns column is-12 archive-block">
                  <div class="post-meta-archive column is-one-fifth-desktop is-one-quarter-tablet is-four-quarters-mobile">
                    <h6><?php the_tags('',', ' ); ?></h6>
                    <small><?php the_time('F jS, Y'); ?></small>
                  </div>
                  <div class="column is-four-fifths-desktop is-three-quarters-tablet is-four-quarters-mobile">
                    <h2 class="tag-page"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  </div>
                </article>
              <?php endwhile; else : ?>
              <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>
