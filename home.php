<?php get_header(); ?>
<h2 class="title">Our Blog</h2>
<div class="container-articles">
        <div class="container-post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="post">
                                        <?php the_post_thumbnail(); ?>

                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <div class="date-cat"><?php the_date(); ?><?php the_category(); ?></div>
                                        <?php the_excerpt(); ?>

                                </div>
                <?php endwhile;
                endif; ?>
        </div>

        <div class="aside">
                <h3>Recent post</h3>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="recent-post">
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                        <div class="date-cat"><?php the_date(); ?><?php the_category(); ?></div>
                                        <?php the_excerpt(); ?>
                                </div>

                <?php endwhile;
                endif; ?>
                <input type="submit" class="wpcf7-email" value="See more">
                <form class="newsletter" action="">
                        <h3>Join Our Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        <?php echo do_shortcode('[contact-form-7 id="100" title="Formulaire de contact 1"]'); ?>
                </form>
        </div>

</div>
<?php get_footer(); ?>