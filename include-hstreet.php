
<!--        SPLASH      -->


<div class="section" id="hst_splash">
    <div class="container text-center">
        <h1 class="aligncenter">Joining God in the renewal of H Street</h1>
        <span class="dashicons dashicons-twitter"></span>
        <span class="dashicons dashicons-facebook-alt"></span>
        <span class="dashicons dashicons-googleplus"></span>
    </div>
</div>


<!--        DIRECTIONS      -->


<div class="section" id='hst_directions'>
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


<div class="section" id='hst_about'>
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

<div class="section" id='hst_leadership'>
    <?php 
    $args = [
        'posts_per_page'   => '4',
        'post_type'        => 'sermon',
        'orderby'          => 'date',
        'order'            => 'DESC',
    ];
    $postslist = get_posts($args);
    foreach ($postslist as $post) :
        echo "hi";
    endforeach;
        setup_postdata($post); ?>  


    <!--        OH BOY CAROUSEL TIME     -->
    
    
    <div class="container">
        <row>
            <H1 class='col-md-10'>Leadership</H1>
            <img src="wp-content/themes/table-theme/img/arrow-right.gif" class='col-md-1 arrow'>
            <img src="wp-content/themes/table-theme/img/arrow-left.gif" class='col-md-1 arrow'>
        </row>
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

    <!--taking data-ride="carousel" out of the div below - don't want animation-->

    <div id="leadershipCarousel" class="carousel slide col-md-8 col-md-offset-4">

      <!-- Indicators -->

      <ol class="carousel-indicators">
        <li data-target="#leadershipCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#leadershipCarousel" data-slide-to="1"></li>
        <li data-target="#leadershipCarousel" data-slide-to="2"></li>
        <li data-target="#leadershipCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="wp-content/themes/table-theme/img/logo.jpg" alt="c1">
        </div>

        <div class="item">
          <img src="wp-content/themes/table-theme/img/logo.jpg" alt="c2">
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#leadershipCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#leadershipCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>