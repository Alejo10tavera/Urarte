<section class="section-box bg-gray-50 pt-50 pb-50 mt-50">
	<div class="container">
		<div class="head-main bd-gray-200">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<h3 class="mb-5">Tendencia</h3>
					<p class="font-base color-gray-500">Emprendimientos especiales de este mes.</p>
				</div>
				<div class="col-xl-5 col-lg-6">
					<ul class="nav nav-tabs" role="tablist">
						<li><a class="active" href="#tab-2-one" data-bs-toggle="tab" role="tab" aria-controls="tab-2-one" aria-selected="true">Varios</a></li>
						<li><a href="#tab-2-two" data-bs-toggle="tab" role="tab" aria-controls="tab-2-two" aria-selected="true">Interesantes</a></li>
						<li><a href="#tab-2-three" data-bs-toggle="tab" role="tab" aria-controls="tab-2-three" aria-selected="true">Mas vistos</a></li>
						<li><a href="#tab-2-four" data-bs-toggle="tab" role="tab" aria-controls="tab-2-four" aria-selected="true">Mas especiales </a></li>
					</ul>
				</div>
			</div>
		</div>

		<?php 

			$select = "logo_project,name_project,url_project,summary_project,whatsapp_project,name_project,url_cluster,name_cluster,name_municipality";

			$rel = "projects,clusters,municipalities";
			$type = "project,cluster,municipality";
			$linkTo = "approval_project,status_project,bdelete_project";
			$equalTo = "1,1,0";
			$orderBy = "id_project";
			$orderMode = "ASC";
			$endAt = 5;

			$projectsOne = TemplateController::random(($totalProjects-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

			$projectsTwo = TemplateController::random(($totalProjects-5), $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt);

			$orderByPT = "views_project";
			$orderModePT = "DESC";

			$projectsThree = TemplateController::random(0, $select, $rel, $type, $linkTo, $equalTo, $orderByPT, $orderModePT, $endAt);

			$orderByPF = "id_project";
			$orderModePF = "ASC";

			$projectsFour = TemplateController::random(0, $select, $rel, $type, $linkTo, $equalTo, $orderByPF, $orderModePF, $endAt);

			
		?>

		<div class="tab-content">

			<div class="tab-pane fade active show" id="tab-2-one" role="tabpanel" aria-labelledby="tab-2-one">

				<div class="list-products-5">

					<?php 

						if (is_array($projectsOne)) {

							foreach ($projectsOne as $key => $value) {

								echo '<div class="card-grid-style-3">

									<div class="card-grid-inner">

										<div class="tools">

											<a class="btn btn-compare btn-tooltip mb-10" href="https://api.whatsapp.com/send?phone=57'.str_replace(' ', '',$value->whatsapp_project).'&text=%C2%A1Hola!%20Me%20parece%20super%20genial%20tu%20emprendimiento%20'.TemplateController::capitalize(strtolower($value->name_project)).'" target="_blank"  aria-label="Preguntar"></a>

											<a class="btn btn-quickview btn-tooltip" aria-label="Ver" href="'.$value->url_project.'"></a>

										</div>

										<div class="image-box">

											<span class="label bg-brand-2">'.$value->name_municipality.'</span>

											<a href="'.$value->url_project.'">
												<img src="'.$path.'views/assets/imgs/projects/'.$value->url_project.'/'.$value->logo_project.'" alt="'.$value->name_project.'">
											</a>

										</div>

										<div class="info-right">
											<a class="font-xs color-gray-500" href="'.$value->url_cluster.'">'.$value->name_cluster.'</a><br><a class="color-brand-3 font-sm-bold" href="'.$value->url_project.'">'.$value->name_project.'</a>								

											<div class="mt-20 box-btn-cart">
												<a class="btn btn-cart" href="'.$value->url_project.'">Ver más</a>
											</div>

											<ul class="list-features">';

												$summary = json_decode($value->summary_project,true);  

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

			<div class="tab-pane fade" id="tab-2-two" role="tabpanel" aria-labelledby="tab-2-two">

				<div class="list-products-5">
					
					<?php 

						if (is_array($projectsTwo)) {

							foreach ($projectsTwo as $key => $value) {

								echo '<div class="card-grid-style-3">

									<div class="card-grid-inner">

										<div class="tools">

											<a class="btn btn-compare btn-tooltip mb-10" href="https://api.whatsapp.com/send?phone=57'.str_replace(' ', '',$value->whatsapp_project).'&text=%C2%A1Hola!%20Me%20parece%20super%20genial%20tu%20emprendimiento%20'.TemplateController::capitalize(strtolower($value->name_project)).'" target="_blank"  aria-label="Preguntar"></a>

											<a class="btn btn-quickview btn-tooltip" aria-label="Ver" href="'.$value->url_project.'"></a>

										</div>

										<div class="image-box">

											<span class="label bg-brand-2">'.$value->name_municipality.'</span>

											<a href="'.$value->url_project.'">
												<img src="'.$path.'views/assets/imgs/projects/'.$value->url_project.'/'.$value->logo_project.'" alt="'.$value->name_project.'">
											</a>

										</div>

										<div class="info-right">
											<a class="font-xs color-gray-500" href="'.$value->url_cluster.'">'.$value->name_cluster.'</a><br><a class="color-brand-3 font-sm-bold" href="'.$value->url_project.'">'.$value->name_project.'</a>								

											<div class="mt-20 box-btn-cart">
												<a class="btn btn-cart" href="'.$value->url_project.'">Ver más</a>
											</div>

											<ul class="list-features">';

												$summary = json_decode($value->summary_project,true);  

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

			<div class="tab-pane fade" id="tab-2-three" role="tabpanel" aria-labelledby="tab-2-three">

				<div class="list-products-5">
					
					<?php 

						if (is_array($projectsThree)) {

							foreach ($projectsThree as $key => $value) {

								echo '<div class="card-grid-style-3">

									<div class="card-grid-inner">

										<div class="tools">

											<a class="btn btn-compare btn-tooltip mb-10" href="https://api.whatsapp.com/send?phone=57'.str_replace(' ', '',$value->whatsapp_project).'&text=%C2%A1Hola!%20Me%20parece%20super%20genial%20tu%20emprendimiento%20'.TemplateController::capitalize(strtolower($value->name_project)).'" target="_blank"  aria-label="Preguntar"></a>

											<a class="btn btn-quickview btn-tooltip" aria-label="Ver" href="'.$value->url_project.'"></a>

										</div>

										<div class="image-box">

											<span class="label bg-brand-2">'.$value->name_municipality.'</span>

											<a href="'.$value->url_project.'">
												<img src="'.$path.'views/assets/imgs/projects/'.$value->url_project.'/'.$value->logo_project.'" alt="'.$value->name_project.'">
											</a>

										</div>

										<div class="info-right">
											<a class="font-xs color-gray-500" href="'.$value->url_cluster.'">'.$value->name_cluster.'</a><br><a class="color-brand-3 font-sm-bold" href="'.$value->url_project.'">'.$value->name_project.'</a>								

											<div class="mt-20 box-btn-cart">
												<a class="btn btn-cart" href="'.$value->url_project.'">Ver más</a>
											</div>

											<ul class="list-features">';

												$summary = json_decode($value->summary_project,true);  

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

			<div class="tab-pane fade" id="tab-2-four" role="tabpanel" aria-labelledby="tab-2-four">

				<div class="list-products-5">
					
					<?php 

						if (is_array($projectsFour)) {

							foreach ($projectsFour as $key => $value) {

								echo '<div class="card-grid-style-3">

									<div class="card-grid-inner">

										<div class="tools">

											<a class="btn btn-compare btn-tooltip mb-10" href="https://api.whatsapp.com/send?phone=57'.str_replace(' ', '',$value->whatsapp_project).'&text=%C2%A1Hola!%20Me%20parece%20super%20genial%20tu%20emprendimiento%20'.TemplateController::capitalize(strtolower($value->name_project)).'" target="_blank"  aria-label="Preguntar"></a>

											<a class="btn btn-quickview btn-tooltip" aria-label="Ver" href="'.$value->url_project.'"></a>

										</div>

										<div class="image-box">

											<span class="label bg-brand-2">'.$value->name_municipality.'</span>

											<a href="'.$value->url_project.'">
												<img src="'.$path.'views/assets/imgs/projects/'.$value->url_project.'/'.$value->logo_project.'" alt="'.$value->name_project.'">
											</a>

										</div>

										<div class="info-right">
											<a class="font-xs color-gray-500" href="'.$value->url_cluster.'">'.$value->name_cluster.'</a><br><a class="color-brand-3 font-sm-bold" href="'.$value->url_project.'">'.$value->name_project.'</a>								

											<div class="mt-20 box-btn-cart">
												<a class="btn btn-cart" href="'.$value->url_project.'">Ver más</a>
											</div>

											<ul class="list-features">';

												$summary = json_decode($value->summary_project,true);  

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