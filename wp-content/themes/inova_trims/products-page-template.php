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
    
    $myposts = get_posts($args);
    ?>
    <div class="row">
  <?php if($myposts):
        foreach ($myposts as $mypost): ?>
    
        <div class="col-xs-12">
            <div><?php the_field('oznaka'); ?></div>
            <div><?php the_field('velicina_duseka'); ?></div>
            <div><?php the_field('oblik_kreveta'); ?></div>
            <div><?php the_field('cena_mehanizama'); ?></div>
        </div>
                    
        <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>