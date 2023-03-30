<section class="section-box pt-50">

	<div class="container">

		<div class="head-main">

			<div class="row">

				<div class="col-xl-7 col-lg-6">

					<h3 class="mb-5">Productos</h3>

					<p class="font-base color-gray-500">Productos especiales en este mes.</p>

				</div>

				<div class="col-xl-5 col-lg-6">

					<ul class="nav nav-tabs" role="tablist">

						<li><a class="active" href="#tab-one" data-bs-toggle="tab" role="tab" aria-controls="tab-one" aria-selected="true">Varios</a></li>

						<li><a href="#tab-two" data-bs-toggle="tab" role="tab" aria-controls="tab-two" aria-selected="true">Interesantes</a></li>

						<li><a href="#tab-three" data-bs-toggle="tab" role="tab" aria-controls="tab-three" aria-selected="true">Mas vistos</a></li>

						<li><a href="#tab-four" data-bs-toggle="tab" role="tab" aria-controls="tab-four" aria-selected="true">Más económicos</a></li>

					</ul>

				</div>

			</div>

		</div>

		<?php 

			$select = "name_category,id_product,name_product,url_product,image_product,headline_product,price_product,specifications_product,summary_product,name_project,url_project,whatsapp_project";

			$rel = "products,categories,projects";
			$type = "product,category,project";
			$linkTo = "approval_product,status_product,bdelete_product";
			$equalTo = "1,1,0";
			$orderBy = "id_product";
			$orderMode = "ASC";
			$endAt = 5;

			$productsOne = TemplateController::random(($totalProducts-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

			$productsTwo = TemplateController::random(($totalProducts-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

			$orderByT = "views_product";
			$orderModeT = "DESC";

			$productsThree = TemplateController::random(0, $select, $rel, $type, $linkTo, $equalTo, $orderByT, $orderModeT, $endAt);

			$orderByF = "price_product";
			$orderModeF = "ASC";

			$productsFour = TemplateController::random(0, $select, $rel, $type, $linkTo, $equalTo, $orderByF, $orderModeF, $endAt);

		?>

		<div class="tab-content">

			<div class="tab-pane fade active show" id="tab-one" role="tabpanel" aria-labelledby="tab-one">

				<div class="list-products-5">

					<?php 

						/*=============================================
						Traer 5 productos aleatoriamente
						=============================================*/
												
						if (is_array($productsOne)) {

							foreach ($productsOne as $key => $value) {
								
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

			<div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">

				<div class="list-products-5">

					<?php 

						if (is_array($productsTwo)) {

							foreach ($productsTwo as $key => $value) {
								
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

			<div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">

				<div class="list-products-5">

					<?php 

						if (is_array($productsThree)) {

							foreach ($productsThree as $key => $value) {
								
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

			<div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
				
				<div class="list-products-5">

					<?php 

						if (is_array($productsFour)) {

							foreach ($productsFour as $key => $value) {
								
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

		</div>

	</div>

</section>