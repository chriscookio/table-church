        <!--        SPLASH      -->
        
        
        <div class="fp_section" id="splash">
            <div class="container text-center">
                <h1 class="aligncenter">AUTHENTIC. THOUGHTFUL. ENGAGED.</h1>
                <span class="dashicons dashicons-twitter"></span>
                <span class="dashicons dashicons-facebook-alt"></span>
                <span class="dashicons dashicons-googleplus"></span>
            </div>
        </div>


             <?php 
//             $url = $site_url;
//             echo $url;
//             echo $get_site_url;
//             if (strpos($site_url, 'hstreet') == false) {
//            echo 'hstreet!';
//        } else { 
//            echo 'not hstreet!'; 
//        } ?>
        
        <!--        ABOUT      -->


        <div class="fp_section" id='about'>
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

        
        <div class="fp_section" id="parishes">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="http://localhost/TableChurch/hstreet/"><h1 class="text-center">H STREET</h1></a>
                        <p class ="text-center">
                            <?php echo $lorem; ?>
                        </p>
                        <a href="http://localhost/TableChurch/hstreet/"><p class="text-center">READ MORE</p></a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://localhost/TableChurch/cohi/"><h1 class="text-center">COLUMBIA HEIGHTS</h1></a>
                        <p class ="text-center">
                            <?php echo $lorem; ?>
                        </p>
                        <a href="http://localhost/TableChurch/hstreet/"><p class="text-center">READ MORE</p ></a>
                    </div>
                </div>
            </div>
        </div>

        
        <!--        ENGAGING      -->


        <div class="fp_section" id="engaging">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" class="engaging_block">
                        <div class="shaded_box">
                            <a href="localhost/TableChurch/SERVING"><h1 class="text-center">SERVING</h1></a>
                            <p><?php echo $lorem_short; ?></p>
                            <a href="localhost/TableChurch/serving"><h3 class="text-center">READ MORE</h3></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shaded_box">
                            <a href="localhost/TableChurch/GROWING"><h1 class="text-center">GROWING</h1></a>
                            <p><?php echo $lorem_short; ?></p>
                            <a href="localhost/TableChurch/GROWING"><h3 class="text-center">READ MORE</h3></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="shaded_box">
                            <a href="localhost/TableChurch/COMMUNITY"><h1 class="text-center">COMMUNITY</h1></a>
                            <p><?php echo $lorem_short; ?></p>
                            <a href="localhost/TableChurch/community"><h3 class="text-center">READ MORE</h3></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shaded_box">
                            <a href="localhost/TableChurch/JUSTICE"><h1 class="text-center">JUSTICE</h1></a>
                            <p><?php echo $lorem_short; ?></p>
                            <a href="localhost/TableChurch/justice"><h3 class="text-center">READ MORE</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!--        TEACHING      -->


        <div class="fp_section" id="teaching">
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

        
        <div class="fp_section" id="giving">
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


        <div class="fp_section" id="kids">
            
            <div class="container">
                <H1>KIDS & STUDENTS</h1>
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><?php echo $lorem_long; ?></div>
                </div>
            </div>
        </div>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

