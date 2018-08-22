<?php
/**
 * The template for displaying Tag pages
 */

get_header(); ?>

  <div class="post">
    <h2>Tag: <?php single_tag_title(); ?></h2>
    <!-- <p>Here you can see the latest articles I have written on the topic of <?php single_tag_title(); ?>.</p> -->
    <div class="columns">
      <div class="column is-10-desktop">
        <div class="columns is-multiline">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="columns column is-12 archive-block">
              <div class="post-meta-archive column is-one-fifth-desktop is-one-quarter-tablet is-four-quarters-mobile">
                <h6><?php the_tags('',', ' ); ?></h6>
                <small><?php the_time('F jS, Y'); ?></small>
              </div>
              <div class="column is-four-fifths-desktop is-three-quarters-tablet is-four-quarters-mobile">
                <h2 class="archive-page"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              </div>
            </article>
          <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
