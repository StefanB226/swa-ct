<?php
/**
 * Default Search Template
 * 
 * 
 * @package blogger
 */
?>

<h1>Showing results for: <?php echo get_search_query(); ?></h1>

<?php while( have_posts() ) : the_post(); ?>
    <?php get_template_part('/template-parts/post'); ?>
<?php endwhile; ?>