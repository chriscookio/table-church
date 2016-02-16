
<!--        SPLASH      -->


<div class="section" id="loc_splash">
    <div class="container text-center">
        <h1 class="aligncenter">Joining God in the renewal of H Street</h1>
        <span class="dashicons dashicons-twitter"></span>
        <span class="dashicons dashicons-facebook-alt"></span>
        <span class="dashicons dashicons-googleplus"></span>
    </div>
</div>


<!--        DIRECTIONS      -->


<div class="section" id='loc_directions'>
    <div class="container">
        <H1>How to get here</H1>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div style="background-color: #F5FE03; height:10px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="wp-content/themes/table-theme/img/logo.jpg" class="directions_map">
            </div>

            <div class="col-md-4">
                <?php echo $lorem_long; ?>
            </div>
        </div>
    </div>
</div>


<!--        ABOUT      -->


<div class="section" id='loc_about'>
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

<div class="section" id='loc_leadership'>
    <?php 
    $leaderList = get_posts( [ post_type => 'leader' ] );
    foreach ($leaderList as $leader) :
        setup_postdata($leader); 
        echo $the_title;
    endforeach;
    echo the_permalink() . "<br>";
    ?>
    Kevin Lum!!<br>
    
            <div class="row">
            <?php 
            $args = [
                'post_type'        => 'leader',
            ];
            $postslist = get_posts($args);
            foreach ($postslist as $post) :
                setup_postdata($post); ?>   
                <div class="col-md-3" style="sermon_thumb" >
                    <?php
                    $attrs = array(
                    ); ?>
                    <?php 
                    the_post_thumbnail(array(200,200), $attrs );
                    the_title();
                    the_content();
                    ?></a>
                </div>
            <?php endforeach;?>
        </div>
    

    <div id="leadershipCarousel" class="carousel slide" data-ride="carousel"> 
    <div class="container">
        <row>
            <H1>Leadership</H1>
            
            <!-- Left and right controls -->

            <a class="left carousel-control" href="#leadershipCarousel" role="button" data-slide="prev">
                <img src="wp-content/themes/table-theme/img/arrow-left.gif" class='arrow' aria-hidden="false">
            </a>
            <a class="right carousel-control" href="#leadershipCarousel" role="button" data-slide="next">
                <img src="wp-content/themes/table-theme/img/arrow-right.gif" class='arrow' aria-hidden="false">
            </a>
        </row>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div style="background-color: #F5FE03; height:10px;"></div>
            </div>
        </div>
    </div>

      <!-- Indicators -->

      <ol class="carousel-indicators">
        <li data-target="#leadershipCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#leadershipCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="wp-content/themes/table-theme/img/logo.jpg" alt="c1" class='col-md-4'>
          <p class='col-md-4'> <?php echo $lorem; ?> </p>
        </div>

        <div class="item">
          <img src="wp-content/themes/table-theme/img/abe.jpg" alt="c2" class='col-md-4'>
          <p class='col-md-4'> <?php echo $lorem; ?> </p>          
        </div>

      </div>

      <!-- Left and right controls -->
<!--      <a class="left carousel-control" href="#leadershipCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#leadershipCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->
    </div>
</div>


<!--        EVENTS      -->


<div class="section" id='loc_events'>
    <div class="container">
        <H1>Events</H1>
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