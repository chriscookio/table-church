<?php

the_post();
//$ID = get_the_ID();
//echo the_id;
?>
<!--<div class="section" id="splash">-->
    
<?php   
the_content();  


if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    /* page markup here using the_content() etc */
  }
}

$args = array( 'p' => get_the_ID() );
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
  while ( $loop->have_posts() ) {
    $loop->the_post();
    /* loop markup here using the_content() etc */
  }
}

wp_reset_postdata(); // reset to the original page data

?>
