<?php 

?>
<section class="section-box mt-50">

	<div class="container">

		<div class="row">

			<div class="col-xl-4 col-lg-12">

				<?php 

					$select = "name_category,name_product,url_product,image_banner_product,headline_product,price_product,name_project,url_project";
					$rel = "products,categories,projects";
					$type = "product,category,project";
					$linkTo = "approval_product,status_product,bdelete_product";
					$equalTo = "1,1,0";
					$orderBy = "id_product";
					$orderMode = "ASC";
					$endAt = 1;

					$box_one = TemplateController::random(($totalProducts-1), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);
					
				?>

				<div class="banner-2 bg-xbox" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $box_one[0]->url_project ?>/products/<?= $box_one[0]->image_banner_product ?>)" alt="<?= $box_one[0]->name_product ?>">

					<span class="color-danger text-uppercase"><?= $box_one[0]->name_project ?></span>
					<h3 class="font-30"><?= $box_one[0]->name_product ?></h3>
					<p><?= $box_one[0]->headline_product ?></p>
					<span class="font-16">$ <?= number_format($box_one[0]->price_product,0,",",".") ?></span>
					<div class="mt-25"><a class="btn btn-brand-2 btn-arrow-right" href="<?= $box_one[0]->url_product ?>">Ver más</a></div>

				</div>
				
			</div>

			<div class="col-xl-8 col-lg-12">

				<div class="image-gallery">

					<?php 

						$select = "name_category,name_product,url_product,image_banner_product,headline_product,price_product,name_project,url_project";
						$rel = "products,categories,projects";
						$type = "product,category,project";
						$linkTo = "approval_product,status_product,bdelete_product";
						$equalTo = "1,1,0";
						$orderBy = "id_product";
						$orderMode = "ASC";
						$endAt = 2;

						$box_two = TemplateController::random(($totalProducts-1), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);						
						
					?>

					<div class="image-big">
						<div class="banner-img-left bg-controller" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $box_two[0]->url_project ?>/products/<?= $box_two[0]->image_banner_product ?>)" alt="<?= $box_two[0]->name_product ?>">
							<a href="<?= $box_two[1]->url_product ?>"><h3 class="font-33 mb-10"><?= $box_two[0]->name_product ?></h3></a>
							<p class="font-18"><?= $box_two[0]->name_project ?></p>
							
						</div>
					</div>

					<div class="image-small">
						<div class="bg-metaverse" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $box_two[1]->url_project ?>/products/<?= $box_two[1]->image_banner_product ?>)" alt="<?= $box_two[1]->name_product ?>">
							<a href="<?= $box_two[1]->url_product ?>"><h3 class="mb-10 font-32"><?= $box_two[1]->name_product ?></h3></a>
							<p class="font-16"><?= $box_two[1]->name_project ?></p>
							
						</div>
					</div>

				</div>

				<div class="image-gallery">

					<?php 

						$select = "name_category,name_product,url_product,image_banner_product,headline_product,price_product,name_project,url_project";
						$rel = "products,categories,projects";
						$type = "product,category,project";
						$linkTo = "approval_product,status_product,bdelete_product";
						$equalTo = "1,1,0";
						$orderBy = "id_product";
						$orderMode = "ASC";
						$endAt = 2;

						$box_three = TemplateController::random(($totalProducts-1), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);				
												
					?>

					<div class="image-small">
						<div class="bg-electronic" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $box_three[0]->url_project ?>/products/<?= $box_three[0]->image_banner_product ?>)" alt="<?= $box_three[0]->name_product ?>">
							<h3 class="font-32"><?= $box_three[0]->name_project ?></h3>
							<p class="font-16 color-brand-3"><?= $box_three[0]->name_product ?></p>
						</div>
					</div>

					<div class="image-big">

						<div class="bg-phone" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $box_three[1]->url_project ?>/products/<?= $box_three[1]->image_banner_product ?>)" alt="<?= $box_three[1]->name_product ?>">

							<a href="<?= $box_three[0]->url_product ?>"><h3 class="font-33 mb-15"><?= $box_three[1]->name_project ?></h3></a>
							<p class="font-18"><?= $box_three[0]->name_product ?></p>
							
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>