<section class="section-box">

	<div class="banner-hero banner-1">

		<div class="container">

			<div class="row">

				<?php 

					/*=============================================
					Traer 5 productos aleatoriamente
					=============================================*/
					$select = "name_category,name_product,url_product,image_banner_product,headline_product,name_project,url_project";
					$rel = "products,categories,projects";
					$type = "product,category,project";
					$linkTo = "approval_product,status_product,bdelete_product";
					$equalTo = "1,1,0";
					$orderBy = "id_product";
					$orderMode = "ASC";
					$endAt = 5;

					$productsSlider = TemplateController::random(($totalProducts-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

				?>

				<div class="col-lg-8">

					<div class="box-swiper">

						<div class="swiper-container swiper-group-1">

							<div class="swiper-wrapper">

								<?php if (is_array($productsSlider)): ?>

									<?php foreach ($productsSlider as $key => $value): ?>

										<div class="swiper-slide">

											<div class="banner-big <?= $style[array_rand($style)] ?>" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $value->url_project ?>/products/<?= $value->image_banner_product ?>)" alt="<?= $value->name_product ?>">

												<span class="font-sm text-uppercase"><?= $value->name_project ?></span>

												<h2 class="mt-10"><?= $value->name_category ?></h2>
												<h1><?= $value->name_product ?></h1>
												<div class="row">
													<div class="col-lg-5 col-md-7 col-sm-12">
														<p class="font-sm color-brand-3"><?= $value->headline_product ?></p>
													</div>
												</div>
												<div class="mt-30"><a class="btn btn-brand-2" href="<?= $value->url_product ?>">Ver más</a></div>
											</div>

										</div>
									
										
									<?php endforeach ?>

								<?php endif ?>

							</div>

							<div class="swiper-pagination swiper-pagination-1"></div>

						</div>

					</div>

				</div>

				<?php 

					/*=============================================
					Traer 2 proyectos aleatoriamente
					=============================================*/

					$select = "logo_project,name_project,url_project,summary_project,whatsapp_project,name_project,url_cluster,name_cluster,name_municipality";

					$rel = "projects,clusters,municipalities";
					$type = "project,cluster,municipality";
					$linkTo = "approval_project,status_project,bdelete_project";
					$equalTo = "1,1,0";
					$orderBy = "id_project";
					$orderMode = "ASC";
					$endAt = 2;

					$projectsSlider = TemplateController::random(($totalProjects-2), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

					

				?>

				<div class="col-lg-4">

					<div class="row">

						<?php foreach ($projectsSlider as $key => $value): ?>

							<div class="col-lg-12 col-md-6 col-sm-12">

								<div class="banner-small banner-small-<?= ($key+1) ?> <?= $style[array_rand($style)] ?>" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $value->url_project ?>/<?= $value->logo_project ?>)" alt="<?= $value->name_project ?>">

									<span class="color-brand-3"><?= $value->name_cluster ?></span>

									<h4 class="mb-10"><?= $value->name_project ?></h4>

									<p class="color-brand-3 font-desc"><?= $value->name_municipality ?></p>

									<div class="mt-20">
										<a class="btn btn-brand-3 btn-arrow-right" href="<?= $value->url_product ?>">Ver más</a>
									</div>

								</div>

							</div>
							
						<?php endforeach ?>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>