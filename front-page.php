<?php
/*
 * The template for front-page.
 */
 get_header(); ?>
      <section>
        <h1>Stevan Popovic'</h1>
        <h2 class="tagline">A commercially-minded software developer.</h2>
      </section>
      <div class="columns">
        <div class="column is-one-half-desktop front-page-info">
          <div class="front-page-info-block">
            <h5>Currently</h5>
            <ul>
              <li>Looking for new opportunities</li>
              <li>Building X, Y and Z</li>
            </ul>
          </div>
          <div class="front-page-info-block">
            <h5>Previously</h5>
            <ul>
              <li>Business Development &amp; Partnerships at Deliveroo</li>
              <li>Partnership Develpoment at YPlan</li>
              <li>Customer Experience at Concep</li>
            </ul>
          </div>
          <div class="front-page-info-block">
            <h5>Writing</h5>
            <!-- Start the Loop. -->
            <ul>
              <?php query_posts('showposts=3'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><small class="date"><?php the_time('d-m-y'); ?></small>
                  <a href="<?php the_permalink(); ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                  </a>
                </li>
              <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
        		 <?php endwhile; else : ?>
        		 	<!-- The very first "if" tested to see if there were any Posts to -->
        		 	<!-- display.  This "else" part tells what do if there weren't any. -->
        		 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        		 	<!-- REALLY stop The Loop. -->
        		 <?php endif; ?>
             </ul>
          </div>
          <div class="front-page-info-block social-links">
            <ul>
              <li><a href="https://github.com/stevanpopo">GitHub</a> &middot;</li>
              <li><a href="https://twitter.com/StevanPopo">Twitter</a> &middot;</li>
              <li><a href="https://www.linkedin.com/in/stevanpopovic/">LinkedIn</a></li>
            </ul>
          </div>
        </div>
        <div class="column is-one-half-desktop">
          <img class="front-page-headshot" src="<?php echo get_template_directory_uri() . '/images/stevan_profile_cropped.png' ?>" alt="Stevan Popovic headshot">
        </div>
      </div>
  <?php get_footer(); ?>
