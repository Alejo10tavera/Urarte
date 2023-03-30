<section class="section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<h3>Categorías</h3>
				<p class="font-base">Sumergete en el increible mundo de el talento artesano.</p>
			</div>
			<div class="col-lg-7">
				<div class="list-brands">
					<div class="box-swiper">
						<div class="swiper-container swiper-group-7">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/acer.svg" alt="Ecom"></a></div>
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/nokia.svg" alt="Ecom"></a></div>
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/assus.svg" alt="Ecom"></a></div>
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/casio.svg" alt="Ecom"></a></div>
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/dell.svg" alt="Ecom"></a></div>
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/panasonic.svg" alt="Ecom"></a></div>
								<div class="swiper-slide"><a href="shop-grid.html"><img src="<?php echo $path ?>views/assets/imgs/slider/logo/vaio.svg" alt="Ecom"></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-50">

			<div class="row">

				<?php 

					$select = "id_category,name_category,url_category,image_category";
					$rel = "categories,clusters";
					$type = "category,cluster";
					$linkTo = "status_category,bdelete_category";
					$equalTo = "1,0";
					$orderBy = "id_category";
					$orderMode = "ASC";
					$endAt = 4;

					$categories = TemplateController::random(($totalCategories-4), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

					if (is_array($categories)) {

						foreach ($categories as $key => $value) {

							echo '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">

									<div class="card-grid-style-2 card-grid-style-2-small hover-up">

										<div class="image-box">

											<a href="'.$value->url_category.'"><img src="'.$backoffice.'views/assets/imgs/categories/'.$value->image_category.'" alt="Ecom"></a>

										</div>

										<div class="info-right"><a class="color-brand-3 font-sm-bold" href="'.$value->url_category.'">

											<h6>'.$value->name_category.'</h6></a>

											<ul class="list-links-disc">';

												$url = API_BASE_URL . "subcategories?linkTo=id_category_subcategory,status_subcategory,bdelete_subcategory&equalTo=".rawurlencode($value->id_category).",1,0&orderBy=id_subcategory&orderMode=DESC&startAt=0&endAt=4&select=url_subcategory,name_subcategory";

								                $menuSubcategories = CurlController::request($url, "GET", array(), array())->results;

								                if (is_array($menuSubcategories)) {
								                	
								                	foreach ($menuSubcategories as $key => $value_) {

								                		echo '<li><a class="font-sm" href="'.$value_->url_subcategory.'">'.$value_->name_subcategory.'</a></li>';

							                		}

						                		}

											echo '</ul>

											<a class="btn btn-gray-abs" href="'.$value->url_category.'">Ver más</a>

										</div>

									</div>

								</div>';						

						}
					
					}

				?>
				
			</div>

		</div>

	</div>

</section>

