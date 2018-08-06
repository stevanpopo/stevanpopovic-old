<?php
/*
Template Name: Writing
*/
get_header(); ?>

	<div class="post">



		<!-- <?php the_post(); ?>
		<h2 class="entry-title"><?php the_title(); ?></h2>

		<?php get_search_form(); ?> -->

		<!-- <h4>Archives by Month:</h4>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

		<h4>Archives by Subject:</h4>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul> -->

		<h2>All Posts</h2>

      <div class="columns">
        <div class="column is-10-desktop">
          <div class="columns is-multiline">
            <?php query_posts('showposts=30'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <article class="columns column is-12 archive-block">
                <div class="column is-one-fifth-desktop is-one-quarter-tablet is-four-quarters-mobile">
                  <h6><?php the_tags('',', ' ); ?></h6>
                  <small><?php the_time('F jS, Y'); ?></small>
                </div>
                <div class="column is-four-fifths-desktop is-three-quarters-tablet is-four-quarters-mobile">
                  <h2 class="archive-page"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </article>
            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div>

        </div>
      </div>

	</div><!-- #post -->
<?php get_footer(); ?>
