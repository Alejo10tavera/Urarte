<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">

	<div class="mobile-header-wrapper-inner">

		<div class="mobile-header-content-area">

			<div class="mobile-logo">

				<a class="d-flex" href="<?= $path ?>">

					<img alt="<?= $company[0]->name_company ?>" src="<?php echo $backoffice ?>views/assets/imgs/template/<?= $company[0]->logo_company ?>">

				</a>

			</div>

			<div class="perfect-scroll">

				<div class="mobile-menu-wrap mobile-header-border">

					<nav class="mt-15">

						<ul class="mobile-menu font-heading">

							<li class="has-children"><a class="active">Inicio</a>

								<ul class="sub-menu">

									<li><a href="<?= $path ?>">Inicio</a></li>
									<li><a href="events">Eventos</a></li>
									<li><a href="fairs">Ferias</a></li>

								</ul>

							</li>

							<li><a href="projects">Proyectos</a></li>

							<li><a href="blog">Blog</a></li>

							<li class="has-children"><a>Páginas</a>

								<ul class="sub-menu two-col">
									<li><a href="about">Acerca de</a></li>
									<li><a href="categories">Categorías</a></li>
									<li><a href="subcategories">Subcategorías</a></li>
									<li><a href="team">Equipo</a></li>
									<li><a href="gallery">Galería</a></li>
									<li><a href="faq">FAQs</a></li>
								</ul>

							</li>

							<li><a href="contact">Contacto</a></li>

						</ul>

					</nav>

				</div>

				<!-- <div class="mobile-account">

					<div class="mobile-header-top">

						<div class="user-account">
							<a href="page-account.html"><img src="<?php echo $path ?>views/assets/imgs/template/ava_1.png" alt="Ecom"></a>
							<div class="content">
								<h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
								<p class="font-xs text-muted">You have 3 new messages</p>
							</div>
						</div>
					</div>

					<ul class="mobile-menu">
						<li><a href="page-account.html">My Account</a></li>
						<li><a href="page-account.html">Order Tracking</a></li>
						<li><a href="page-account.html">My Orders</a></li>
						<li><a href="page-account.html">My Wishlist</a></li>
						<li><a href="page-account.html">Setting</a></li>
						<li><a href="page-login.html">Sign out</a></li>
					</ul>
				</div>
 -->
				<div class="mobile-banner">

					<?php 

						$randomId = rand(1, $totalProducts);

						$url = API_BASE_URL . "relations?rel=products,categories,projects&type=product,category,project&linkTo=id_product&equalTo=".$randomId."&select=id_product,name_product,url_product,image_product,name_category,name_project";

						$mobileProduct = CurlController::request($url, "GET", array(), array())->results[0];

					?>
					
					<div class="bg-5 block-iphone" style="background-image: url(<?= $path ?>views/assets/imgs/page/homepage1/iphone-12.png);">

						<span class="color-brand-3 font-sm-lh32"><?= $mobileProduct->name_project ?></span>					
						<h3 class="font-xl mb-10"><?= $mobileProduct->name_product ?></h3>
						<p class="font-base color-brand-3 mb-10"><?= $mobileProduct->name_category ?></p>
						<a class="btn btn-arrow" href="<?= $mobileProduct->url_product ?>">Ver más</a>

					</div>

				</div>

				<div class="site-copyright color-gray-400 mt-30">Copyright <?= date('Y') ?> &copy; <?= $company[0]->name_company ?>.<br>Desarrollado por<a href="#" target="_blank">&nbsp; Urasys</a></div>
			</div>

		</div>

	</div>
	
</div>