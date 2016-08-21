<?php
/**
 * Template Name: Project Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
<?php
get_footer();
