<section class="section-box mt-50">

	<div class="container">

		<div class="head-main">

			<h3 class="mb-5">Muestras de ferias</h3>

			<p class="font-base color-gray-500">Muestras de talento de nuestras ferias</p>

			<div class="box-button-slider">
				<div class="swiper-button-next swiper-button-next-group-4"></div>
				<div class="swiper-button-prev swiper-button-prev-group-4"></div>
			</div>

		</div>

	</div>

	<div class="container mt-10">

		<div class="box-swiper">

			<div class="swiper-container swiper-group-4">

				<div class="swiper-wrapper pt-5">

					<?php 

						$select = "name_sample,url_sample,image_sample,author_sample,order_sample,url_fair,category_fair";

						$rel = "samples,fairs";
						$type = "sample,fair";
						$linkTo = "status_sample,bdelete_sample";
						$equalTo = "1,0";
						$orderBy = "id_sample";
						$orderMode = "ASC";
						$endAt = 5;

						$samples = TemplateController::random(($totalSamples-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);
						
						if(is_array($samples)){

							foreach ($samples as $key => $value) {
								
								echo '<div class="swiper-slide">

										<div class="card-grid-style-1">

											<div class="image-box">
												<a href="'.$value->url_sample.'"></a>
												<img src="'.$backoffice.'views/assets/imgs/samples/'.$value->image_sample.'" alt="'.$value->name_sample.'">
											</div>

											<a class="tag-dot font-xs" href="'.$value->url_fair.'">'.$value->category_fair.'</a>

											<a class="color-gray-1100" href="'.$value->url_sample.'">
												<h4>'.$value->name_sample.'</h4>
											</a>
											<div class="mt-20">
												<span class="color-gray-500 font-xs mr-30">'.$value->author_sample.'</span>
												<span class="color-gray-500 font-xs">Puesto<span> '.$value->order_sample.'</span></span>
											</div>
										</div>
									</div>';

							}

						}

					?>


				</div>

			</div>

		</div>

	</div>

</section>