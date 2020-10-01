<?php get_header();
while(have_posts()){
	the_post(); ?>



	<section class="section-services section-t8">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap d-flex justify-content-between">
						<div class="title-box">
							<h2 class="title-a"><?php the_title();?></h2>
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
								<h2 class="title-c">Bagneux aujourd’hui et demain …</h2>
							</div>
						</div>
						<div class="card-body-c">
							<p class="content-c">

								<?php the_content();?>
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
	<?php get_footer();}?>
