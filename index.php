<?php
/** 
 * index.php for wp-heirarchy fallback
 *
 * Detail description: In index.php file we will code to display different content for different port. 
 * This template wil;l display fully dynamic contents for every single post
 *
 * @package WordPress
 * @subpackage wphierarchy
 * Author: Junaid Jwolt
 * Date: 16/09/2022
 * time: 08:52 AM
 */
?>

<?php get_header(); ?>


<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('template-parts/content', get_post_format() );  ?>

    <?php endwhile; else: ?>

      <?php get_template_part('template-parts/content', 'none');  ?>

    <?php endif; ?>
    
    <p>Template: index.php </p>
  </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>