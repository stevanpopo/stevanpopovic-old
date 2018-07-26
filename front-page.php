<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stevanpopovic.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Muli:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
    <div class="container">
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
        </div>
        <div class="column is-one-half-desktop">
          <img class="front-page-headshot" src="<?php echo get_template_directory_uri() . '/images/stevan_headshot.jpg' ?>" alt="Stevan Popovic headshot">
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="columns ">
          <div class="revue-subscribe column is-two-thirds-desktop">
            <form action="https://www.getrevue.co/profile/stevanpopo/add_subscriber" method="post" id="revue-form" name="revue-form"  target="_blank">
              <p>Sign up to my (very occasional) email to hear first about my upcoming product launches and receive any new posts straight to your inbox. Just enter your email and name below.</p>
              <div class="columns subscriber-input">
                <div class="field column is-three-fifths">
                  <input class="revue-form-field input" placeholder="Your email address..." type="email" name="member[email]" id="member_email">
                </div>
                <div class="field column is-one-fifth">
                  <input class="revue-form-field input" placeholder="Full name..." type="text" name="member[first_name]" id="member_first_name">
                </div>
                <div class="field column is-one-fifth revue-form-actions">
                  <input class="button" type="submit" value="Subscribe" name="member[subscribe]" id="member_submit">
                </div>
              </div>
            </form>
          </div>
          <div class="column is-one-third copyright">
            <p>Built with &#9825; by</p>
            <p><a href="#">@stevanpopo</a>, 2018.</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
