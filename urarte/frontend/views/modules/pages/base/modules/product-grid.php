<section class="section-box pt-50">

	<div class="container">

		<div class="head-main bd-gray-200">
			<div class="row">
				<div class="col-lg-6">
				</div>				
			</div>
		</div>

		<?php 

			$select = "name_category,id_product,name_product,url_product,image_product,headline_product,price_product,specifications_product,summary_product,gallery_product,views_product,name_project,url_project,whatsapp_project";

		?>

		<div class="row">

			<?php 

				/*=============================================
				Traer 1 productos aleatoriamente
				=============================================*/

				$type = "product,category,project";
				$linkTo = "approval_product,status_product,bdelete_product";
				$equalTo = "1,1,0";
				$orderBy = "id_product";
				$orderMode = "ASC";
				$endAt = 1;

				$product = TemplateController::random(($totalProducts-1), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);
								
			?>

			<div class="col-lg-4">

				<div class="card-grid-style-3 hover-show hurry-up">

					<div class="card-grid-inner">

						<div class="tools">

							<a class="btn btn-compare mb-10" href="https://api.whatsapp.com/send?phone=57<?= str_replace(' ', '',$value->whatsapp_project) ?>&text=Hola,%20<?= TemplateController::capitalize(strtolower($value->name_project)) ?>%20Estoy%20interesado%20en%20este%20producto%20<?= TemplateController::capitalize(strtolower($value->name_product)) ?>" target="_blank" aria-label="Preguntar"></a>

							<a class="btn btn-quickview" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>

						</div>

						<span class="label"><span class="font-lg-bold color-white">Especial</span></span>

						<div class="image-box">

							<div class="box-swiper">

								<div class="swiper-container swiper-group-1">

									<div class="swiper-wrapper pt-5">

										<?php foreach (json_decode($product[0]->gallery_product,true) as $index => $image): ?>

											<div class="swiper-slide">
												<img src="<?php echo $path ?>views/assets/imgs/projects/<?= $product[0]->url_project ?>/gallery/<?= $image ?> " alt="<?= $product[0]->name_product ?>">
											</div>
											
										<?php endforeach ?>

									</div>

									<div class="swiper-pagination swiper-pagination-2"></div>

								</div>

							</div>

						</div>

						<div class="text-center mt-10 mb-15">
							<h4>Descripción</h4>
							<p class="font-base color-gray-500"><?= $product[0]->headline_product ?></p>
						</div>
						
						<div class="divide"></div>

						<div class="info-right">

							<span class="font-xs color-gray-500"><?= $product[0]->name_project ?></span><br>
							<a class="color-brand-3 font-sm-bold" href="<?= $product[0]->url_product ?>">
							<h5><?= $product[0]->name_product ?></h5></a>

							<div class="price-info">
								<h3 class="color-brand-3 price-main d-inline-block">$ <?= number_format($value->price_product,0,",",".") ?></h3>
							</div>

							<div class="box-progress">
							
								<div class="row">

									<div class="col-lg-6 col-md-6 col-sm-6 col-6">
										<span class="font-xs color-gray-500">Vistas:</span><span class="font-xs-bold color-gray-900"><?= $product[0]->views_product ?></span>
									</div>
									
								</div>

							</div>

							<div class="divide"></div>

							<ul class="list-features">
								<?php 

									$summary = json_decode($product[0]->summary_product,true);  

									if (is_array($summary)) {  

										foreach ($summary as $index => $value_) {

											echo '<li>'.$value_.'</li>';

										}

									}
								?>

							</ul>

						</div>

					</div>

				</div>

			</div>

			<div class="col-lg-8">

				<div class="row">

					<?php 

						/*=============================================
						Traer 6 productos aleatoriamente
						=============================================*/
						$type = "product,category,project";
						$linkTo = "approval_product,status_product,bdelete_product";
						$equalTo = "1,1,0";
						$orderBy = "id_product";
						$orderMode = "ASC";
						$endAt = 6;

						$productsGrid = TemplateController::random(($totalProducts-6), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);	

						if (is_array($productsGrid)) {

							foreach ($productsGrid as $key => $value) {
							  	
							  	echo '<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card-grid-style-3">

											<div class="card-grid-inner">

												<div class="tools">

													<a class="btn btn-compare btn-tooltip mb-10" href="https://api.whatsapp.com/send?phone=57'.str_replace(' ', '',$value->whatsapp_project).'&text=Hola,%20'.TemplateController::capitalize(strtolower($value->name_project)).'%20Estoy%20interesado%20en%20este%20producto%20'.TemplateController::capitalize(strtolower($value->name_product)).'" target="_blank"  aria-label="Preguntar"></a>

													<a class="btn btn-quickview btn-tooltip" aria-label="Ver" href="'.$value->url_product.'"></a>

												</div>

												<div class="image-box">

													<a href="'.$value->url_product.'"><img src="'.$path.'views/assets/imgs/projects/'.$value->url_project.'/products/'.$value->image_product.'" alt="'.$value->name_product.'"></a>

												</div>

												<div class="info-right">

													<a class="font-xs color-gray-500" href="'.$value->name_category.'">'.$value->name_category.'</a><br>
													<a class="color-brand-3 font-sm-bold" href="'.$value->url_product.'">'.$value->name_product.'</a>
													

													<div class="price-info">
														<strong class="font-lg-bold color-brand-3 price-main">$ '.number_format($value->price_product,0,",",".").'</strong>
													</div>

													<div class="mt-20 box-btn-cart">
														<a class="btn btn-cart" href="'.$value->url_product.'">Ver más</a>
													</div>

													<ul class="list-features">';

														$summary = json_decode($value->summary_product,true);  

														if (is_array($summary)) {  

															foreach ($summary as $index => $value_) {
																
																echo '<li>'.$value_.'</li>';

															}

														}

													echo '</ul>

												</div>
											</div>
										</div>
									</div>';

							}  

						}

					?>

				</div>

			</div>

		</div>

		<div class="list-products-5">

			<?php 

				/*=============================================
				Traer 5 productos aleatoriamente
				=============================================*/

				$type = "product,category,project";
				$linkTo = "approval_product,status_product,bdelete_product";
				$equalTo = "1,1,0";
				$orderBy = "id_product";
				$orderMode = "ASC";
				$endAt = 5;

				$productsGrid2 = TemplateController::random(($totalProducts-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);	
			
				if (is_array($productsGrid2)) {

					foreach ($productsGrid2 as $key => $value) {

						echo '<div class="card-grid-style-3">
								<div class="card-grid-inner">
									<div class="tools">

										<a class="btn btn-compare btn-tooltip mb-10" href="https://api.whatsapp.com/send?phone=57'.str_replace(' ', '',$value->whatsapp_project).'&text=Hola,%20'.TemplateController::capitalize(strtolower($value->name_project)).'%20Estoy%20interesado%20en%20este%20producto%20'.TemplateController::capitalize(strtolower($value->name_product)).'" target="_blank"  aria-label="Preguntar"></a>

										<a class="btn btn-quickview btn-tooltip" aria-label="Ver" href="'.$value->url_product.'"></a>

									</div>

									<div class="image-box">

										<a href="'.$value->url_product.'"><img src="'.$path.'views/assets/imgs/projects/'.$value->url_project.'/products/'.$value->image_product.'" alt="'.$value->name_product.'"></a>

									</div>

									<div class="info-right">

										<a class="font-xs color-gray-500" href="'.$value->name_category.'">'.$value->name_category.'</a><br>
										<a class="color-brand-3 font-sm-bold" href="'.$value->url_product.'">'.$value->name_product.'</a>
										

										<div class="price-info">
											<strong class="font-lg-bold color-brand-3 price-main">$ '.number_format($value->price_product,0,",",".").'</strong>
										</div>

										<div class="mt-20 box-btn-cart">
											<a class="btn btn-cart" href="'.$value->url_product.'">Ver más</a>
										</div>

										<ul class="list-features">';

											$summary = json_decode($value->summary_product,true);  

											if (is_array($summary)) {  

												foreach ($summary as $index => $value_) {
													
													echo '<li>'.$value_.'</li>';

												}

											}

										echo '</ul>

									</div>
								</div>
							</div>';

					}	

				}

			?>
			
		</div>
	</div>
</section>