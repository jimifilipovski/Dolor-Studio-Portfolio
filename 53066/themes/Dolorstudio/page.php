<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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

<?php get_footer(); ?>
