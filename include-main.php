<!--        SPLASH      -->


<div class="section" id="splash">
    <div class="container-fluid text-center">
        <h1 class="aligncenter">Authentic. Thoughtful. Engaged.</h1>
        <span class="smicon-bkgd"><span class="dashicons dashicons-twitter smicon"></span></span>
        <span class="dashicons dashicons-facebook-alt smicon"></span>
        <span class="dashicons dashicons-googleplus smicon"></span>
    </div>
</div>


<!--        ABOUT      -->


<div class="section" id='about'>
    <div class="container">
        <H1>WHO WE ARE</H1>
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


<!--        PARISHES      -->


<div class="section" id="parishes">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo site_url() . "/hstreet/"; ?>" ><h2 class="text-center" a-unstyled>H STREET</h2></a>
                <p class ="text-center">
                    <?php echo $lorem; ?>
                </p>
                <a href="<?php echo site_url() . "/hstreet/"; ?>" ><p class="text-center a-unstyled">READ MORE</p></a>
            </div>
            <div class="col-md-6">
                <a href="<?php echo site_url() . "/cohi/"; ?>"><h2 class="text-center" a-unstyled>COLUMBIA HEIGHTS</h2></a>
                <p class ="text-center">
                    <?php echo $lorem; ?>
                </p>
                <a href="<?php echo site_url() . "/cohi/"; ?>"><p class="text-center a-unstyled">READ MORE</p ></a>
            </div>
        </div>
    </div>
</div>


<!--        ENGAGING      -->


<div class="section" id="engaging">
    <div class="container">
        <div class="row">
            <div class="col-md-6" class="engaging_block">
                <div class="shaded_box">
                    <a href="<?php echo site_url() . "/serving/"; ?>"><h2 class="text-center">Serving</h2></a>
                    <p><?php echo $lorem_short; ?></p>
                    <a href="<?php echo site_url() . "/serving/"; ?>"><h3 class="text-center">Read more</h3></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shaded_box">
                    <a href="<?php echo site_url() . "/growing/"; ?>"><h2 class="text-center">Growing</h2></a>
                    <p><?php echo $lorem_short; ?></p>
                    <a href="<?php echo site_url() . "/growing/"; ?>"><h3 class="text-center">Read more</h3></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="shaded_box">
                    <a href="<?php echo site_url() . "/community/"; ?>"><h2 class="text-center">Community</h2></a>
                    <p><?php echo $lorem_short; ?></p>
                    <a href="<?php echo site_url() . "/community/"; ?>"><h3 class="text-center">Read more</h3></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shaded_box">
                    <a href="<?php echo site_url() . "/events/"; ?>"><h2 class="text-center">Events</h2></a>
                    <p><?php echo $lorem_short; ?></p>
                    <a href="<?php echo site_url() . "/events/"; ?>"><h3 class="text-center">Read more</h3></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--        TEACHING      -->


<div class="section" id="teaching">
    <div class="container">
        <h1>TEACHING</h1>
        <div class="row">
            <?php 
            $args = [
                'posts_per_page'   => '4',
                'post_type'        => 'sermon',
                'orderby'          => 'date',
                'order'            => 'DESC',
            ];
            $postslist = get_posts($args);
            foreach ($postslist as $post) :
                setup_postdata($post); ?>   
                <div class="col-md-3" style="sermon_thumb" >
                    <?php
                    $attrs = array(
                            'class' => 'sermon_thumb',
                    ); ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(200,200), $attrs ); ?></a>
                    <p class="sermon_date"> <?php the_time( get_option( 'date_format' ) ); ?> </p>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>


<!--        GIVING      -->


<div class="section" id="giving">
    <div class="container">
        <H1>WANT TO GIVE?</H1>
        <div class="row">
            <div class="col-md-8  col-md-offset-4"><?php echo $lorem_long; ?></div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">GIVE ONLINE</div>
        </div>
            <div style="background-color: #F5FE03; height:10px;"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">MANAGE GIVING</div>
        </div>
            <div style="background-color: #F5FE03; height:10px;"></div>
    </div>
</div>


<!--        KIDS      -->


<div class="section" id="kids">

    <div class="container">
        <H1>KIDS & STUDENTS</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-4"><?php echo $lorem_long; ?></div>
        </div>
    </div>
</div>