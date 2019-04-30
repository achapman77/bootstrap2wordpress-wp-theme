<?php 
/* 
    Template Name: Home Page
*/
    get_header(); 
?>

    <?php get_template_part( 'template-parts/content', 'hero'); ?>

    <?php get_template_part( 'template-parts/content', 'optin'); ?>

    <?php get_template_part( 'template-parts/content', 'boostIncome'); ?>
    
    <?php get_template_part( 'template-parts/content', 'whoBenefits'); ?>

    <?php get_template_part( 'template-parts/content', 'courseFeatures'); ?>

    <?php get_template_part( 'template-parts/content', 'projectFeatures'); ?>

    <?php get_template_part( 'template-parts/content', 'videoFeaturette'); ?>
    
    <?php get_template_part( 'template-parts/content', 'instructor'); ?>

    <?php get_template_part( 'template-parts/content', 'testimonials'); ?>

<?php get_footer(); ?>
