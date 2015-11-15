<?php
/**
 *
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage jpqpress
 * @since jpmpress 1.0
 *
 * Last Revised: Oct 5, 2015
 */
global $childDir;
get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div role="main" class="ui-content">
            <h1><?php the_title();?></h1>
            <p class="meta"><?php echo jqmpress_posted_on();?></p>
            <?php the_content();?>
            <?php endwhile;?>
            <?php comments_template(); ?>
	</div><!-- /content -->
<?php get_footer(); ?>