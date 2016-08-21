<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


  <article class="group">
                <section class="projectDescription group">
                    <div class="onerow">
                        <div class="col4">
                          <?php if( get_field( "title" ) ): ?>
                            <h1 class="title"><?php the_field( "title" ); ?></h1>
                            <?php endif; ?>
                        </div>
                        <div class="col2">
                         <?php if( get_field( "projectroles" ) ): ?>
                           <?php the_field( "projectroles" ); ?>
                           <?php endif; ?>
                        </div>
                         <?php if( get_field( "content" ) ): ?>  
                        <div class="col6 last">
                         <?php the_field( "content" ); ?>
                        </div>
                         <?php endif; ?>
                    </div>
                </section>
                <section class="projectList">
                  <?php if(get_field('projectlist')): ?>
                  <?php while(has_sub_field('projectlist')): ?>
                    <div class="onerow">
                        <div class="col12 last">
                           <img src="<?php the_sub_field('image'); ?>" alt="">
                           <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                     <?php endwhile; ?>
    
                     <?php endif; ?>
                    
                </section>
                </article>
<?php get_footer(); ?>
