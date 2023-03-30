<?php 

	/*=============================================
	Traer 3 productos aleatoriamente
	=============================================*/

	$select = "name_category,name_product,url_product,image_banner_product,headline_product,name_project,url_project";
	$rel = "products,categories,projects";
	$type = "product,category,project";
	$linkTo = "approval_product,status_product,bdelete_product";
	$equalTo = "1,1,0";
	$orderBy = "id_product";
	$orderMode = "ASC";
	$endAt = 3;

	$productsBanners = TemplateController::random(($totalProducts-3), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

?>	

<section class="section-box pt-50">
	<div class="container">
		<div class="row">

			<?php foreach ($productsBanners as $key => $value): ?>

				<?php 

					$styleBanners = array("block-iphone", "block-samsung", "block-drone");

				?>

				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-30">

					<div class="<?= $style[array_rand($style)] ?> <?= $styleBanners[array_rand($styleBanners)] ?>" style="background-image: url(<?php echo $path ?>views/assets/imgs/projects/<?= $value->url_project ?>/products/<?= $value->image_banner_product ?>)" alt="<?= $value->name_product ?>" >

						<span class="color-brand-3 font-sm-lh32"><?= $value->name_project ?></span>
						<h3 class="font-xl mb-10"><?= $value->name_product ?></h3>
						<p class="font-base color-brand-3 mb-20"><?= $value->name_category ?></p>
						<a class="btn btn-brand-2 btn-arrow-right" href="<?= $value->url_product ?>">Ver más</a>

					</div>
					
				</div>
					
			<?php endforeach ?>

		</div>

	</div>

</section>