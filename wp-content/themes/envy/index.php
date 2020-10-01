<?php get_header();?>
<!-- Section Banner -->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Les actualités</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pb-5">
                    <div class="card-box-c foo">

                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-han"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Les prochaines dates</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Découvrez nos événements, nos ateliers, nos formations !
                            </p>
                        </div>
                        <!--<div class="card-footer-c">
						  <a href="#" class="link-c link-icon">
							<span class="ion-ios-arrow-forward"></span>
						  </a>
						</div>-->
                    </div>
                </div>
                <!--<div class="col-md-12 pb-5">
                    <div class="card-box-c foo">

                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-han"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">C’est dans quel sens le futur ?</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">

                                Les réunions internationales sur le changement climatique se suivent et aboutissent trop souvent
                                à des consensus mous. Parallèlement, les enjeux écologiques deviennent un centre de préoccupation
                                pour un nombre croissant de citoyens, sans que chacun ne sache quoi faire concrètement.

                                À Bagneux Environnement, nous nous engageons dans la bataille de tous les jours pour que
                                l’humanité et la nature s’accordent en harmonie ! Notre train se dirige vers l’avenir, et il
                                est chargé de bonnes intentions, de lectures enthousiasmantes, d’idées bienveillantes et il
                                roule à la tolérance.
                            </p>
                        </div>
                        <!--<div class="card-footer-c">
						  <a href="#" class="link-c link-icon">
							<span class="ion-ios-arrow-forward"></span>
						  </a>
						</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news-grid grid mt-10">
        <div class="container ">
            <div class="row card-columns">
				<?php
				while(have_posts()){
					the_post();?>


                    <!--/ News Grid Star /-->



                    <div class="col-md-4 card">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b img-thumbnail">
                                <img class="img-fluid"src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <?php $categories = get_the_category(); ?>
                                        <a href="#" class="category-b"><?php echo esc_html( $categories[0]->name); ?></a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-text">
                            <span class="date-b">Écrit par <?php the_author_posts_link();?> le</span>
                        </div>
                        <div class="card-text">
                            <span class="date-b"><?php the_time('j M. Y')?> dans <?php echo get_the_category_list(', ')?></span>
                        </div>
                        <div class="card-text mt-2">
                            <p><?php the_excerpt()?></p><a href="<?php the_permalink();?>">Lire plus...</a>
                        </div>
                    </div>

                    <!--/ News Grid End /-->

					<?php
				}
				?>
            </div>
        </div>
    </section>
<?php get_footer();?>