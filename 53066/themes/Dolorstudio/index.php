<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

            <article class="group">
               
                    <?php
                    $i=1;
					query_posts('category_name=project&posts_per_page=-1');
					while(have_posts()): the_post();
					?> 
                    <div class="col4 <?php if($i%3==0) echo 'last';?> .wrap around">
                        <a href="<?php the_permalink(); ?>" class="projectThumb">
                             <?php the_post_thumbnail(); ?>
                            <h2 class="projectTitle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <?php
					$i++;
					endwhile;
					wp_reset_query();
					?>
  
            </article>

<?php get_footer(); ?>
