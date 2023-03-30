<?php 

/*=============================================
Traer él listado de categorías
=============================================*/

$categoriesUrl = API_BASE_URL . "categories?select=id_category,name_category,url_category,image_category";
$menuCategories = CurlController::request($categoriesUrl, "GET", array(), array())->results;

?>

<header class="header sticky-bar">

	<div class="container">

		<div class="main-header">

			<div class="header-left">

				<div class="header-logo">

					<a class="d-flex" href="<?= $path ?>">

						<img alt="<?= $company[0]->name_company ?>" src="<?php echo $backoffice ?>views/assets/imgs/template/<?= $company[0]->logo_company ?>">

					</a>

				</div>

				<div class="header-search">

					<div class="box-header-search">

						<form class="form-search" method="post" action="#">
							
							<div class="box-keysearch">
								<input class="form-control font-xs" type="text" value="" placeholder="Search for items">
							</div>

						</form>

					</div>

				</div>

				<div class="header-nav">

					<nav class="nav-main-menu d-none d-xl-block">

						<ul class="main-menu">

							<li class="has-children"><a class="active">Urarte</a>

								<ul class="sub-menu two-col">
									<li><a href="<?= $path ?>">Urarte</a></li>
									<li><a href="events">Eventos</a></li>
									<li><a href="fairs">Ferias</a></li>
								</ul>

							</li>
							
							<li><a href="projects">Proyectos</a></li>

							<li class="has-children"><a>Páginas</a>

								<ul class="sub-menu two-col">
									<li><a href="about">Acerca de</a></li>
									<li><a href="gallery">Galería</a></li>
									<li><a href="faq">FAQs</a></li>
								</ul>

							</li>

							<li><a href="contact">Contacto</a></li>

						</ul>

					</nav>

					<div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>

				</div>

				<div class="header-shop">

					<div class="d-inline-block box-dropdown-cart">

						<a href="login"><span class="font-lg icon-list icon-account"><span>Mi cuenta</span></span></a>

					</div>

				</div>

			</div>

		</div>

	</div>

</header>