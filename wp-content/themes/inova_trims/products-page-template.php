<?php /* Template Name: Products page */ ?>

<?php get_header(); ?>

<div class="page-content">
    <?php $loop = new WP_Query( array( 'post_type' => 'proizvodi', 'posts_per_page' => -1 ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <p><?php get_field("oznaka") ?></p>
        <p><?php get_field("velicina_duseka") ?></p>
        <img src="<?php get_field("oblik_kreveta") ?>" />
        <p><?php get_field("cena_mehanizama") ?></p>
    <?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>