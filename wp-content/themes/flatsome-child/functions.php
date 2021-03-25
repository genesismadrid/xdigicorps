<?php
// Add custom Theme Functions here
function wpb_last_updated_date( $content ) { 
    $u_time = get_the_time( 'U' );
    $u_modified_time = get_the_modified_time( 'U' );
    $custom_content = '';
    if ( $u_modified_time >= $u_time + 86400 ) {
       $updated_date = get_the_modified_time( 'F jS, Y' );
       $updated_time = get_the_modified_time( 'h:i a' );
       $custom_content .= '<p class="last-updated">Last updated on ' . $updated_date . ' at ' . $updated_time .'</p>';
     }
    $custom_content .= $content;
    return $custom_content;
}
add_filter( 'the_content', 'wpb_last_updated_date' );