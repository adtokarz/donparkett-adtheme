<?php get_header(); ?>

<?php

$title = get_the_title();
$thumbnail = get_the_post_thumbnail_url();
$desc = get_field('opis');
$gallery = get_field('galeria_zdjec');

?>
<div class="single-post__wrapper">

    <div class="signle-post__wrapper__post-title">
        <h1 class="page-title site-container"><?php echo $title; ?></h1>
    </div>
    <div class="single-post__wrapper__content site-container">
        <div class="single-post__wrapper__content__thumbnail">
            <h2 class="text-left"><?php echo $title; ?></h2>
            <img src="<?php echo $thumbnail; ?>" alt="" class="single-post__thumbnail">
        </div>
            <p><?php echo $desc; ?></p>
            <div class="single-post__gallery"><?php 
            
            foreach($gallery as $photo) :
                // echo '<pre>' , var_dump($photo) , '</pre>';
                ?>
                <img src="<?php echo $photo['url'] ?>" alt="">
                <?php
                endforeach;
            ?></div>
        
    </div>
</div>




<?php the_content(); ?>

<?php get_footer(); ?>