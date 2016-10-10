<?php /* Template Name: Products page */ ?>

<?php get_header(); ?>

<div class="page-content">
    <?php 
$args = array(
    'numberposts' => -1,
    'post_type' => 'proizvodi',
    'orderby' => 'title',
    'order' =>'ASC',
);

$loop = new WP_Query( $args );
?>
<div class="row">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div><?php the_field('oznaka'); ?></div>
            <div><?php the_field('velicina_duseka'); ?></div>
            <img src="<?php the_field('oblik_kreveta'); ?>"/>
            <div><?php the_field('cena_mehanizama'); ?></div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
</div>

<?php get_footer(); ?