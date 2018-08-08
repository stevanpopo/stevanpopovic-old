<?php
/*
 * The Template for displaying all single posts.
 */
 get_header(); ?>

	<div id="primary" class="content-area columns">

 			<?php if (have_posts()) : ?>
 			<?php while (have_posts()) : the_post(); ?>
        <div class="column is-2 post-meta-info">
          <!-- Display a comma separated list of the Post's Categories. -->
          <!-- <h5><?php the_category( ', ' ); ?></h5> -->
          <h6><?php the_tags('',', '); ?></h6>
          <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
          <small><?php the_time('F jS, Y'); ?></small>
        </div>

        <div class="post column is-8">
          <!-- Display the Title as a link to the Post's permalink. -->

          <h1 class="post-title"><?php the_title(); ?></h1>

          <!-- Display the Post's content in a div box. -->

          <div class="entry content">
            <?php the_content(); ?>
          </div>

          <!-- Display a tweet button -->

          <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-via="stevanpopo" data-show-count="false">Tweet</a>

          <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->

          <?php comments_template(); ?>

        </div> <!-- post -->


		<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
