<?php /* Template Name: Products page */ ?>

<?php get_header(); ?>

<div class="page-content">
    <?php 
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'proizvodi',
    'order' =>'ASC',
);

$loop = new WP_Query( $args );
?>
<div class="row">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <ul class="product-list">
                <li>
                     <div><?php the_field('oznaka'); ?></div>
                     <div>Veličina dušeka:</div>  
                     <div><?php the_field('velicina_duseka'); ?></div>
                     <img src="<?php echo get_field('oblik_kreveta')['url']; ?>"/>
                     <div><?php the_field('cena_mehanizama'); ?></div>
                </li>
            </ul>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
</div>

<?php get_footer(); ?>