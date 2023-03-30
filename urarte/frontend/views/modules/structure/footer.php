<footer class="footer">

	<div class="footer-1">

		<div class="container">

			<div class="row">

				<div class="col-lg-4 width-25 mb-30">

					<h4 class="mb-30 color-gray-1000">Contacto</h4>

					<div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Dirección:</strong> <?= $company[0]->address_company ?></div>

					<div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Teléfono:</strong> <?= $company[0]->phone_company ?></div>

					<div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong> <?= $company[0]->email_company ?></div>

					<div class="mt-30">


						<?php if ($company[0]->social_company != null): ?>   

							<?php foreach (json_decode($company[0]->social_company, true) as $key => $value):  ?>	
			
								<a class="icon-socials icon-<?= array_keys($value)[0] ?> <?= array_keys($value)[0] ?>" href="<?= $value[array_keys($value)[0]] ?>"></a>
								
							<?php endforeach ?>

						<?php endif ?>
						
					</div>

				</div>

				<div class="col-lg-4 width-20 mb-30">
					<h4 class="mb-30 color-gray-1000">Nosotros</h4>
					<ul class="menu-footer">
						<li><a href="about">Misión &amp; Visión</a></li>
						<li><a href="teams">Nuestro equipo</a></li>
						<li><a href="press">Prensa &amp; Medios</a></li>
						<li><a href="testimonials">Testimonios</a></li>
					</ul>
				</div>

				<div class="col-lg-4 width-16 mb-30">
					<h4 class="mb-30 color-gray-1000"><?= $company[0]->name_company ?></h4>
					<ul class="menu-footer">
						<li><a href="clusters">Grupos</a></li>
						<li><a href="categories">Categorías</a></li>
						<li><a href="subcategories">Subcategorías</a></li>
						<li><a href="events">Noticias &amp; Eventos</a></li>
					</ul>
				</div>

				<div class="col-lg-4 width-16 mb-30">
					<h4 class="mb-30 color-gray-1000">Interés</h4>
					<ul class="menu-footer">
						<li><a href="faq">FAQs</a></li>
						<li><a href="community">Comunidad</a></li>
						<li><a href="contact">Contacto</a></li>
						<li><a href="medium">Soporte</a></li>
					</ul>
				</div>

				<div class="col-lg-4 width-23">

					<h4 class="mb-30 color-gray-1000">Agradecimiento</h4>

					<div>
						<p class="font-md color-gray-900"><?= $company[0]->message_company ?></p>
						
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="footer-2">

		<div class="footer-bottom-1">

			<div class="container">

				<div class="footer-2-top mb-20">

					<a href="<?= $path ?>">

						<img alt="<?= $company[0]->name_company ?> - <?= $company[0]->subtitle_company ?>" src="<?php echo $backoffice ?>views/assets/imgs/template/<?= $company[0]->logo_company ?>" style="width:150px">
					</a>

					
					<a class="font-xs color-gray-1000" href="#"><?= $company[0]->name_company ?> Fundadores</a>
					<a class="font-xs color-gray-1000" href="#"><?= $company[0]->name_company ?> Eventos </a>
					<a class="font-xs color-gray-1000" href="#"><?= $company[0]->name_company ?> Ferias</a>

				</div>

					<?php 

						for ($i=0; $i < 3; $i++) { 
							
							echo '<div class="footer-2-bottom">

									<div class="head-left-footer">

										<h6 class="color-gray-1000">'.$menuCategories[$i]->name_category.':</h6>

									</div>

									<div class="tags-footer">';

										$url = API_BASE_URL . "subcategories?linkTo=id_category_subcategory,status_subcategory,bdelete_subcategory&equalTo=".rawurlencode($menuCategories[$i]->id_category).",1,0&select=url_subcategory,name_subcategory";

						                $menuSubcategories = CurlController::request($url, "GET", array(), array())->results;

						                if (is_array($menuSubcategories)) {
						                						                
							                foreach ($menuSubcategories as $key => $value) {
							                	
							                	echo '<a href="'.$path.$value->url_subcategory.'">'.$value->name_subcategory.'</a>';

							                }

						                }

								echo '</div>

							</div>';

						}
					?>

			</div>

		</div>

		<div class="container">

			<div class="footer-bottom mt-20">

				<div class="row">

					<div class="col-lg-6 col-md-12 text-center text-lg-start">
						<span class="color-gray-900 font-sm">Copyright &copy; <?= date('Y') ?> Desarrollado por <a href="" target="_blank"><span class="color-warning">Urasys</span></a>. Todos los derechos reservados.</span>
					</div>

					<div class="col-lg-6 col-md-12 text-center text-lg-end">

						<ul class="menu-bottom">
							<li><a class="font-sm color-gray-900" href="page-term.html">Conditions of Use</a></li>
							<li><a class="font-sm color-gray-900" href="page-term.html">Privacy Notice</a></li>
							<li><a class="font-sm color-gray-900" href="page-careers.html">Interest-Based Ads</a></li>
						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</footer>
