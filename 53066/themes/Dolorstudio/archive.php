<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

   <article class="group">
               
                    <?php
                    $i=1;
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
				
					?>
  
            </article>


<?php get_footer(); ?>
