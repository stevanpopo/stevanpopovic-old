<?php
/*
Template Name: Projects Page
*/
 get_header(); ?>
  <div class="content-area columns">
    <div class='post column is-10'>
  		<?php if (have_posts()) : while (have_posts()) : the_post();?>

  			<h2><?php the_title(); ?></h2>

  			<?php the_content(); ?>
          <?php endwhile; endif; ?>
  	</div>
    <div class="column is-2">

    </div>
  </div>

<?php get_footer(); ?>
