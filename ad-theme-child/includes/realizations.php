<?php
function get_realizations()
{
    ob_start();

    $args = array(
        'post_type' => 'realizacje',
        'posts_per_page' => 3
    );
    $realizacje = new WP_Query( $args );
    if ( $realizacje->have_posts() ) {
        echo '<div class="start__realizations__container">';

        while ( $realizacje->have_posts() ) {
            $realizacje->the_post();
            echo '<div class="start__realizations__containe__box">';
            if ( has_post_thumbnail() ) {
               echo '<a href="'.get_the_permalink().'">';
                the_post_thumbnail();
               echo '</a>';
            }
            echo '<p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';
            echo '</div>';
        }

        echo '</div>';
    }
    wp_reset_postdata();


    $getClean = ob_get_clean();

    return $getClean;
}
add_shortcode('get_realizations', 'get_realizations');


function get_all_realizations()
{
    ob_start();

    $args = array(
        'post_type' => 'realizacje',
        'posts_per_page' => -1
    );
    $realizacje = new WP_Query( $args );
    if ( $realizacje->have_posts() ) {
        echo '<div class="start__realizations__container">';

        while ( $realizacje->have_posts() ) {
            $realizacje->the_post();
            echo '<div class="start__realizations__containe__box">';
            if ( has_post_thumbnail() ) {
               echo '<a href="'.get_the_permalink().'">';
                the_post_thumbnail();
               echo '</a>';
            }
            echo '<p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';
            echo '</div>';
        }

        echo '</div>';
    }
    wp_reset_postdata();


    $getClean = ob_get_clean();

    return $getClean;
}
add_shortcode('get_all_realizations', 'get_all_realizations');


?>