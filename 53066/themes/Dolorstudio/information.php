<?php
/**
 * Template Name: Information Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  <article class="group">
   <?php	while(have_posts()): the_post(); ?>
             <div class="onerow">
                <div class="col12 last">
                   <?php if( get_field( "banner_title" ) ): ?><img src="<?php the_field( "banner_image" ); ?>" alt=""><?php endif; ?>
                   <p class="caption"> <?php if( get_field( "banner_title" ) ): ?><?php the_field( "banner_title" ); ?> <?php endif; ?></p>
                </div>
            </div>

            <section class="projectDescription group">
                <div class="onerow">
                    <div class="col4">
                        <h1><?php the_title(); ?></h1>
                    </div>
                   
                   
                  
                        <?php the_content(); ?>

                  
                   
                </div>
            </section>
     <?php endwhile; ?>
            </article>

<?php
get_footer();
