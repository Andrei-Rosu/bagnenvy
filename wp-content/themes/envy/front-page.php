<?php get_header();?>
    <!--/ Sunbeams /-->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image" id="bg-image">
                <script type="x-shader/x-fragment" id="mask">
  precision highp float;

  uniform vec2 resolution;
  uniform sampler2D image;
  uniform vec2 imageResolution;
  uniform float progress;

  vec2 adjustRatio(vec2 uv, vec2 inputResolution, vec2 outputResolution) {
    vec2 ratio = vec2(
      min((outputResolution.x / outputResolution.y) / (inputResolution.x / inputResolution.y), 1.),
      min((outputResolution.y / outputResolution.x) / (inputResolution.y / inputResolution.x), 1.)
    );
    return uv * ratio + (1. - ratio) * 0.5;
  }

  vec2 getZoomedUv(vec2 uv, float zoom, vec2 origin) {
    origin.x = -origin.x;
    uv += origin;
    float scale = 1. / zoom;
    vec2 zoomedUv = uv * scale;
    zoomedUv -= 0.5 * (scale - 1.);
    return zoomedUv;
  }

  const float maxMove = 0.032;

  void main() {
    vec2 uv = gl_FragCoord.st / resolution;
    uv.y = 1. - uv.y;
    uv = adjustRatio(uv, imageResolution, resolution);
    uv = getZoomedUv(uv, 1. + maxMove, vec2((progress - 0.5) * maxMove, 0.));

    gl_FragColor = texture2D(image, uv);
  }
</script>
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 grad">
                                    <div class="intro-body">
                                        <p class="intro-title-top">
                                            <br> </p>
                                        <h1 class="intro-titles mb-4">
                                            Vivons la transition !
                                        </h1>

                                        <!--										 <p class="intro-subtitle intro-price pb-5">-->
                                        <!--											 <a href="contact.html"><span class="price-a">Lire plus...</span></a>-->
                                        <!--										 </p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Sunbeams -->






    <!-- Sunbeams end-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box mx-auto border border-dark rounded">
                            <h2 class="title-a text-center">NOS OBJECTIFS</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 pb-5">
                    <div class="card-box-c foo">

                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-han"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Sensibiliser à la protéction de l'énvironnement</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">

                                Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                                S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                                direction que nous voulons suivre.
                                En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                                proposer des solutions pratiques.
                            </p>
                        </div>
                        <!--<div class="card-footer-c">
						  <a href="#" class="link-c link-icon">
							<span class="ion-ios-arrow-forward"></span>
						  </a>
						</div>-->
                    </div>
                </div>
                <div class="col-md-7 pb-5">
                    <div class="card-box-c foo">


                        <div class="card-body-c">
                            <img class="image" src="wp-content/themes/envy/img/Sensibiliser.svg">
                        </div>
                        <!--<div class="card-footer-c">
						  <a href="#" class="link-c link-icon">
							<span class="ion-ios-arrow-forward"></span>
						  </a>
						</div>-->
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-7 pb-5">

                    <div class="card-box-c foo">


                        <div class="card-body-c">
                            <img class="image" src="wp-content/themes/envy/img/Adapter.svg">
                        </div>
                        <!--<div class="card-footer-c">
						  <a href="#" class="link-c link-icon">
							<span class="ion-ios-arrow-forward"></span>
						  </a>
						</div>-->
                    </div>
                </div>
                <div class="col-md-5 pb-5">
                    <div class="card-box-c foo">

                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-han"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Adapter la ville au changement climatique</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">

                                Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                                S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                                direction que nous voulons suivre.
                                En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                                proposer des solutions pratiques.
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
            <div class="row">
                <div class="col-md-5 pb-5">
                    <div class="card-box-c foo">

                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-han"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Partager le savoir faire</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">

                                Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                                S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                                direction que nous voulons suivre.
                                En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                                proposer des solutions pratiques.
                            </p>
                        </div>
                        <!--<div class="card-footer-c">
						  <a href="#" class="link-c link-icon">
							<span class="ion-ios-arrow-forward"></span>
						  </a>
						</div>-->
                    </div>
                </div>
                <div class="col-md-7 pb-5">
                    <div class="card-box-c foo">


                        <div class="card-body-c">
                            <img class="image" src="wp-content/themes/envy/img/Planting.svg">
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
    <!--/ Services End /-->


    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box mx-auto border border-dark rounded">
                            <h2 class="title-a">Nos Initiatives</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="col-md-12 row">
                <div class="carousel-item-b col-md-6 mb-5">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="wp-content/themes/envy/img/forest.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">Nature en Ville</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                        <span class="price-a"><a href="#" class="link-a">Cliquer ici pour en savoir plus
					  <span class="ion-ios-arrow-forward"></span>

                                    </div>

                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <span>Découvrir et préserver la faune, la flore et les écosystèmes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-b col-md-6 mb-5">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="wp-content/themes/envy/img/young-tomato.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">Alimentation et agriculture</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
					  <span class="price-a"><a href="property-single.html" class="link-a">Cliquer ici pour en savoir plus
					  <span class="ion-ios-arrow-forward"></span>
					</a></span>
                                    </div>

                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>

                                            <span>Repenser nos systèmes alimentaires et cultiver la ville de demain</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-b col-md-6">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="wp-content/themes/envy/img/treeunder.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">Climat et énergie</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                        <span class="price-a"><a href="#" class="link-a">Cliquer ici pour en savoir plus
					  <span class="ion-ios-arrow-forward"></span>

                                    </div>

                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
						<span class="p-1">Comprendre les enjeux climatiques, participer à la transition bas carbone
                            et inventer des modes de vie plus autonomes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-b col-md-6">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="wp-content/themes/envy/img/poubelle.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">Réduction des déchets</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
					  <span class="price-a"><a href="property-single.html" class="link-a">Cliquer ici pour en savoir plus
					  <span class="ion-ios-arrow-forward"></span>
					</a></span>
                                    </div>

                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>

                                        <span>Créer des solutions pour promouvoir une consommation responsable, éviter
                                            le gaspillage et valoriser le réemploi solidaire.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <section class="section-agents section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box mx-auto border border-dark rounded">
                            <h2 class="title-a">Agir avec nous</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                    <div class="col-md-3 mb-5 mt-5">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="wp-content/themes/envy/img/benevole.svg" alt="" class="img-d img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 card-body-c mb-5 mt-5">
                        <h3 class="title-d">
                            <a href="#" class="link-two">Je deviens bénévole</a>
                        </h3>
                        <p class="content-c">

                            Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                            S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                            direction que nous voulons suivre.
                            En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                            proposer des solutions pratiques.
                        </p>
                    </div>


                    <div class="col-md-8 card-body-c mb-5 mt-5">
                        <h3 class="title-d">
                            <a href="#" class="link-two">Je deviens membre</a>
                        </h3>
                        <p class="content-c">

                            Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                            S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                            direction que nous voulons suivre.
                            En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                            proposer des solutions pratiques.
                        </p>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">

                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="wp-content/themes/envy/img/membre.svg" alt="" class="img-d img-fluid">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 mb-5 mt-5">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="wp-content/themes/envy/img/don.svg" alt="" class="img-d img-fluid">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-9 card-body-c mb-5 mt-5">
                        <h3 class="title-d">
                            <a href="agent-single.html" class="link-two">Je fais un don</a>
                        </h3>
                        <p class="content-c">

                            Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                            S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                            direction que nous voulons suivre.
                            En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                            proposer des solutions pratiques.
                        </p>
                    </div>


                    <div class="col-md-9 card-body-c mb-5 mt-5">
                        <h3 class="title-d">
                            <a href="agent-single.html" class="link-two">Je deviens partenaire</a>
                        </h3>
                        <p class="content-c">

                            Notre association existe notamment et surtout pour la passion de la nature qui nous anime.
                            S’appesantir longuement et de manière dramatique sur les menaces qui pèsent sur elle n’est pas la
                            direction que nous voulons suivre.
                            En créant cette association, nous avons ainsi souhaité nous concentrer sur l’environnement local et
                            proposer des solutions pratiques.
                        </p>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="wp-content/themes/envy/img/parteneriat.svg" alt="" class="img-d img-fluid">
                            </div>

                        </div>
                    </div>

            </div>
        </div>
    </section>


    <!--/ News Star /-->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Actualités</h2>
                        </div>
                        <div class="title-link">
                            <a href="<?php echo site_url('/actualites')?>">Lire plus
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-news row">
                <div class="column left col-12 col-md-8">
					<?php echo do_shortcode("[frontpage_news widget=\"71\" name=\"homepage\"]"); ?>
                </div>
                <div class="fb-page column right col-12 col-md-4" data-href="https://www.facebook.com/bagneuxenvironnement.org/events/" data-tabs="events" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/bagneuxenvironnement.org/events/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/bagneuxenvironnement.org/events/">
                            Bagneux Environnement
                        </a>
                    </blockquote>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!--/ News End /-->

    <!--/ Testimonials Star /
	<section class="section-testimonials section-t8 nav-arrow-a">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12">
			<div class="title-wrap d-flex justify-content-between">
			  <div class="title-box">
				<h2 class="title-a">Testimonials</h2>
			  </div>
			</div>
		  </div>
		</div>
		<div id="testimonial-carousel" class="owl-carousel owl-arrow">
		  <div class="carousel-item-a">
			<div class="testimonials-box">
			  <div class="row">
				<div class="col-sm-12 col-md-6">
				  <div class="testimonial-img">
					<img src="img/testimonial-1.jpg" alt="" class="img-fluid">
				  </div>
				</div>
				<div class="col-sm-12 col-md-6">
				  <div class="testimonial-ico">
					<span class="ion-ios-quote"></span>
				  </div>
				  <div class="testimonials-content">
					<p class="testimonial-text">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
					  debitis hic ber quibusdam
					  voluptatibus officia expedita corpori.
					</p>
				  </div>
				  <div class="testimonial-author-box">
					<img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
					<h5 class="testimonial-author">Albert & Erika</h5>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="carousel-item-a">
			<div class="testimonials-box">
			  <div class="row">
				<div class="col-sm-12 col-md-6">
				  <div class="testimonial-img">
					<img src="img/testimonial-2.jpg" alt="" class="img-fluid">
				  </div>
				</div>
				<div class="col-sm-12 col-md-6">
				  <div class="testimonial-ico">
					<span class="ion-ios-quote"></span>
				  </div>
				  <div class="testimonials-content">
					<p class="testimonial-text">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
					  debitis hic ber quibusdam
					  voluptatibus officia expedita corpori.
					</p>
				  </div>
				  <div class="testimonial-author-box">
					<img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
					<h5 class="testimonial-author">Pablo & Emma</h5>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	/ Testimonials End /-->


    <!-- wp:latest-posts {"displayPostDate":true} /-->
<?php echo do_shortcode("[frontpage_news widget=\"71\" name=\"homepage\"]"); ?>

<?php get_footer();?>