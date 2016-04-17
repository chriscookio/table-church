
<!--        SPLASH      -->


<div class="section" id="parish_splash">
    <div class="container text-center">
        <h1 class="aligncenter">Joining God in the renewal of H Street</h1>
        <span class="dashicons dashicons-twitter"></span>
        <span class="dashicons dashicons-facebook-alt"></span>
        <span class="dashicons dashicons-googleplus"></span>
    </div>
</div>


<!--        DIRECTIONS      -->


<div class="section" id='locationation_directions'>
    <div class="container">
        <H1>How to get here</H1>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div style="background-color: #F5FE03; height:10px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php echo do_shortcode('[put_wpgm id=1]'); ?>
            </div>

            <div class="col-md-4">
                <?php echo $lorem_long; ?>
            </div>
        </div>
    </div>
</div>


<!--        ABOUT      -->


<div class="section" id='parish_about'>
    <div class="container">
        <H1>About this campus</H1>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div style="background-color: #F5FE03; height:10px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <?php echo $lorem_long; ?>
            </div>
        </div>
    </div>
</div>


<!--        LEADERSHIP      -->

<div class="section" id='parish_leadership'>
    <div id="leadershipCarousel" class="carousel slide" data-ride="carousel"> 
        <div class="container">
            <row>
                <H1 class="col-md-10">Leadership</H1>

                <!-- Left and right controls -->

                <a class="left carousel-control col-md-1" href="#leadershipCarousel" role="button" data-slide="prev">
                    <img src="wp-content/themes/table-theme/img/arrow-left.gif" class='arrow' aria-hidden="false">
                </a>
                <a class="right carousel-control col-md-1" href="#leadershipCarousel" role="button" data-slide="next">
                    <img src="wp-content/themes/table-theme/img/arrow-right.gif" class='arrow' aria-hidden="false">
                </a>
            </row>
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div style="background-color: #F5FE03; height:10px;"></div>
                </div>
            </div>
        </div>

        
      <!-- Indicators not needed - commenting out, keeping for reference if designed in later -->

<!--        <div class="container">
          <row>
            <ol class="carousel-indicators col-md-offset-8 col-md-4">
              <li data-target="#leadershipCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#leadershipCarousel" data-slide-to="1"></li>
            </ol> 
          </row>
        </div>-->

        <!-- Wrapper for slides -->
        <div class="container">
            <div class="row">
                <div class="carousel-inner col-md-offset-4 col-md-8" role="listbox">        
                    <?php
                    $i = 0;
                    $args = [ 'post_type'        => 'leader', ];
                    $postslist = get_posts($args);

                    function leader_first() {
                        global $i;
                        if ($i == 0) : 
                            echo "active"; 
                        endif;
                    }
                    foreach ($postslist as $post) :
                    setup_postdata($post);
                    ?>
                    <div class="item <?php leader_first(); ?>">
                        <div style="float:left; margin: 10px;">

                            <?php
                            $attr = array();   // here to remember syntax in case attrs are needed
                            the_post_thumbnail('thumbnail', $attr );
                            ?>
                            
                        </div>
                        
                        <div style = "font-size:1.25em; font-weight: bold; margin: 10px;">
                            <?php   the_title();    ?>
                        </div>
                        <div style = "margin: 10px;" >
                            <?php   
                            the_content();
                            $i++;
                            ?>
                        </div>

                    </div>

                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!--        EVENTS      -->


<div class="section" id='parish_events'>
    <div class="container">
        <H1>Events</H1>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div style="background-color: #F5FE03; height:10px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <?php
                // Ensure the global $post variable is in scope
                global $post;
                $events = tribe_get_events( array(
                    'posts_per_page' => 1,
                    'orderby'          => 'modifed',
                    'order'            => 'DESC',
                ) );

                foreach ( $events as $post ) {
                    setup_postdata( $post );
                ?>
                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo tribe_get_start_date(); ?> </h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Learn More>></a><br>
                    <a href="<?php echo site_url() . "/events"; ?>">View Calendar>></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

