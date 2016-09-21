<?php /* Template Name: Pocetna */ ?>

<?php get_header(); ?>

<div class="page-content">
<?php
$page = get_page_by_title( 'pocetna' );
$content = apply_filters('the_content', $page->post_content); 
echo $content;
?>
</div>


<?php get_footer(); ?>
