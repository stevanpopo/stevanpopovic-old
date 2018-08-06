<?php
/*
Template Name: Page
*/
 get_header(); ?>
  <div class="content-area columns">
    <div class='post column is-8'>
  		<?php if (have_posts()) : while (have_posts()) : the_post();?>

  			<h2><?php the_title(); ?></h2>

  			<?php the_content(); ?>
          <?php endwhile; endif; ?>
  	</div>
    <div class="column is-4">
      <img src="<?php echo get_template_directory_uri() . '/images/stevan_profile.png' ?>" alt="stevan's profile headshot">

      <div class="additional-info">
        <!-- <h3>Additional</h3> -->
        <h5><a href="./values">Values</a></h5>
        <p>Things that are important to me.</p>
        <h5><a href="./books">Books</a></h5>
        <p>Books I've learned from and the notes I made.</p>
        <!-- <h5><a href="./bucket-list">Bucket List</a></h5>
        <p>The things I want to do.</p>
        <h5><a href="./yearly-summaries">Yearly Summaries</a></h5>
        <p>My personal yearly reviews, year by year.</p>
        <h5>Heuristics</h5>
        <p>A few rules of thumb for pragmatic decision making.</p>
        <h5>Videos</h5>
        <p>Moments worth watching in full.</p>
        <h5>Experiments</h5>
        <p>A log of all my personal experiments.</p>
        <h5>My Future Company</h5>
        <p>Some ideas for how I'll run my future company.</p> -->
      </div>
    </div>
  </div>

<?php get_footer(); ?>
