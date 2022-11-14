<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="title-biens">
                        <h1 class="h1"><?php the_title(); ?></h1>
                        <p><?= get_field('accroche'); ?></p>
                </div>
                <div class="medias">
                        <div class="video">
                                <?= get_field('video'); ?>
                        </div>
                        <div class="container-image">
                                <img src="<?= get_field('image1')["url"]; ?>">
                                <img src="<?= get_field('image2')["url"]; ?>">
                        </div>
                </div>
                <div class="container-bottom-detail">
                        <div class="container-features">
                                <p class="description">
                                        <?= get_field('description'); ?>
                                </p>
                                <div class="address">
                                        <p><?= get_field('n°_rue'); ?></p>
                                        <p><?= get_field('rue'); ?></p>
                                        <p><?= get_field('code_postal'); ?></p>
                                        <p><?= get_field('ville'); ?></p>
                                </div>
                                <div class="features">
                                        <p><?= get_field('surface'); ?>m²</p>
                                        <p><?= get_field('nombre_de_chambres'); ?> chambres</p>
                                        <p><?= get_field('nombre_de_salles_de_bain'); ?> salle de bain</p>
                                </div>
                        </div>
                        <div class="container-description-prix">
                                <div class="container-description">
                                        <p><?= get_field('description_prix'); ?></p>
                                </div>
                                <div class="prix">
                                        <p><?= get_field('prix'); ?>€</p>
                                        <button class="button-header">Request Visit Now</button>
                                </div>
                        </div>
                </div>
                <?php the_content(); ?>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>