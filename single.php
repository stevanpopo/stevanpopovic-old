<?php
/*
 * The Template for displaying all single posts.
 */
 get_header(); ?>

	<div id="primary" class="content-area">

 			<?php if (have_posts()) : ?>
 			<?php while (have_posts()) : the_post(); ?>
			<div class="post">
			 	<!-- Display the Title as a link to the Post's permalink. -->

			 	<h1 class="post-title"><?php the_title(); ?></h1>

			 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

			 	<small><?php the_time('F jS, Y'); ?><!-- by <?php the_author_posts_link(); ?>--></small>


			 	<!-- Display the Post's content in a div box. -->

			 	<div class="entry">
			 		<?php the_content(); ?>
			 	</div>

				<!-- Display a tweet button -->

				<a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-via="stevanpopo" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<br>
				<br>

			 	<!-- Display a comma separated list of the Post's Categories. -->

			 	<small class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></small>

				<br>

				<?php comments_template(); ?>



			</div> <!-- post -->

		<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php // get_footer(); ?> 
