<?php
/*
Template Name: Page
*/
 get_header(); ?>
  <div class="content-area reading columns">
    <div class='post column is-8'>
  		<?php if (have_posts()) : while (have_posts()) : the_post();?>

  			<h1><?php the_title(); ?></h1>

  			<?php the_content(); ?>
          <?php endwhile; endif; ?>
  	</div>
    <div class="column is-4">

    </div>
  </div>

<?php get_footer(); ?>
