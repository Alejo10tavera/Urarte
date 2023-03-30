<section class="section-box mt-50">

	<div class="container">

		<div class="row">

			<div class="col-lg-8">

				<div class="head-main">

					<h3 class="mb-5">Eventos y ferias</h3>

					<p class="font-base color-gray-500">Eventos y ferias para nuestra comunidad.</p>
					<div class="box-button-slider">
						<div class="swiper-button-next swiper-button-next-group-1"></div>
						<div class="swiper-button-prev swiper-button-prev-group-1"></div>
					</div>

				</div>

				<div class="box-swiper">

					<div class="swiper-container swiper-group-1">

						<div class="swiper-wrapper pt-5">

							<div class="swiper-slide">
								
								<div class="row">

									<?php 

										$randomStart = rand(0, ($totalEvents - 6));

										$eventsUrl = API_BASE_URL . "events?linkTo=status_event,bdelete_event&equalTo=1,0&orderBy=id_event&orderMode=DESC&startAt=".$randomStart."&endAt=6&select=name_event,url_event,organizer_event,start_date_event,end_date_event,venue_event,banner_event";
										$events = CurlController::request($eventsUrl, "GET", array(), array())->results;

										if(is_array($events)){

											foreach ($events as $key => $value) {

												$hoy = date('Y-m-d');

												if($hoy < $value->end_date_event){												
													echo '<div class="col-lg-6 col-md-6 col-sm-12">

														<div class="card-grid-style-2">

															<div class="image-box">
																<a href="'.$value->url_event.'"><img src="'.$backoffice.'views/assets/imgs/events/'.$value->banner_event.'" alt="'.$value->name_event.'"></a>
															</div>

															<div class="info-right">
																<span class="font-xs color-gray-500">'.$value->organizer_event.'</span><br>
																<a class="color-brand-3 font-sm-bold" href="'.$value->url_event.'">'.$value->name_event.'</a>

																<div class="price-info">
																	<p class="font-sm color-brand-3">'.$value->start_date_event.'</p>
																	<p class="font-sm color-brand-3">'.$value->end_date_event.'</p>
																	<p class="font-sm color-brand-3">'.$value->venue_event.'</p>
																</div>
															</div>
														</div>
													</div>';

												}

											}

										}

									?>

								</div>

							</div>

							<div class="swiper-slide">

								<div class="row">

									<?php 

										$randomStart = rand(0, ($totalFairs - 6));

										$fairsUrl = API_BASE_URL . "fairs?linkTo=status_fair,bdelete_fair&equalTo=1,0&orderBy=id_fair&orderMode=DESC&startAt=".$randomStart."&endAt=6&select=*";
										$fairs = CurlController::request($fairsUrl, "GET", array(), array())->results;		

										if (is_array($fairs)) {

											foreach ($fairs as $key => $value) {

												echo '<div class="col-lg-6 col-md-6 col-sm-12">

														<div class="card-grid-style-2">

															<div class="image-box">
																<a href="'.$value->url_fair.'"><img src="'.$backoffice.'views/assets/imgs/fairs/'.$value->banner_fair.'" alt="'.$value->name_fair.'"></a>
															</div>

															<div class="info-right">

																<span class="font-xs color-gray-500">'.$value->venue_fair.'</span><br>

																<a class="color-brand-3 font-sm-bold" href="'.$value->url_fair.'">'.$value->name_fair.'</a>													

																<div class="price-info">
																	<p class="font-sm color-brand-3">'.$value->category_fair.'</p>
																</div>
																<ul class="list-features">';

																	$summary = json_decode($value->summary_fair,true);  

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

				</div>

			</div>

			<div class="col-lg-4">

				<div class="banner-right text-center" style="background: url(<?php echo $backoffice ?>views/assets/imgs/template/<?= $company[0]->topsell_company ?>) no-repeat 0px 0px;">

					<span class="text-no"><?= $company[0]->name_company ?></span>
					<h5 class="text-main mt-20"><?= $company[0]->subtitle_company ?></h5>
					<p class="text-desc mt-15"><?= $company[0]->email_company ?></p>

				</div>

			</div>

		</div>

	</div>

</section>