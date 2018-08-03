<?php
/*
Template Name: Writing
*/
get_header(); ?>

	<div class="post">

		<!--

		<?php the_post(); ?>
		<h2 class="entry-title"><?php the_title(); ?></h2>

		<?php get_search_form(); ?>

		<h4>Archives by Month:</h4>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

		<h4>Archives by Subject:</h4>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

		-->

		<h2>All Posts</h2>

		<?php query_posts('showposts=50'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		 	<!-- Display the Title as a link to the Post's permalink. -->

		 	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

		 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

		 	<small><?php the_time('F jS, Y'); ?><!-- by <?php the_author_posts_link(); ?>--></small>


		 	<!-- Display the Post's content in a div box.
		 	<div class="entry">
		 		<?php the_content(); ?>
		 	</div> -->


		 	<!-- Display a comma separated list of the Post's Categories.
		 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
		    -->

		 	<!-- Stop The Loop (but note the "else:" - see next line). -->

		 <?php endwhile; else : ?>


		 	<!-- The very first "if" tested to see if there were any Posts to -->
		 	<!-- display.  This "else" part tells what do if there weren't any. -->
		 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


		 	<!-- REALLY stop The Loop. -->
		 <?php endif; ?>


	</div><!-- #post -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
