<?php 

define("API_BASE_URL", CurlController::api());

/*=============================================
Traer el dominio principal y backoffice
=============================================*/

$path = TemplateController::path();
$backoffice = TemplateController::backoffice();

/*=============================================
Traer datos de la empresa
=============================================*/
$companyFields = "logo_company,icon_company,name_company,subtitle_company,address_company,complementaryaddress_company,phone_company,email_company,description_company,keywords_company,author_company,social_company,message_company,topsell_company";
$companyUrl = API_BASE_URL . "company?linkTo=id_company,bdelete_company&equalTo=1,0&select=" . $companyFields;
$company = CurlController::request($companyUrl, "GET", array(), array())->results;

/*=============================================
Traer el total de productos y categorias
=============================================*/

$totalProductsUrl = API_BASE_URL . "products?linkTo=approval_product,status_product,bdelete_product&equalTo=1,1,0&select=id_product";
$totalProducts = CurlController::request($totalProductsUrl, "GET", array(), array())->total;

$totalCategoriesUrl = API_BASE_URL . "categories?linkTo=status_category,bdelete_category&equalTo=1,0&select=id_category";
$totalCategories = CurlController::request($totalCategoriesUrl, "GET", array(), array())->total;

$totalProjectsUrl = API_BASE_URL . "projects?linkTo=approval_project,status_project,bdelete_project&equalTo=1,1,0&select=id_project";
$totalProjects = CurlController::request($totalProjectsUrl, "GET", array(), array())->total;

$totalEventsUrl = API_BASE_URL . "events?linkTo=status_event,bdelete_event&equalTo=1,0&select=id_event";
$totalEvents = CurlController::request($totalEventsUrl, "GET", array(), array())->total;

$totalFairsUrl = API_BASE_URL . "fairs?linkTo=status_fair,bdelete_fair&equalTo=1,0&select=id_fair";
$totalFairs = CurlController::request($totalFairsUrl, "GET", array(), array())->total;

$totalSamplesUrl = API_BASE_URL . "samples?linkTo=status_sample,bdelete_sample&equalTo=1,0&select=id_sample";
$totalSamples = CurlController::request($totalSamplesUrl, "GET", array(), array())->total;

$totalTeamUrl = API_BASE_URL . "team?linkTo=status_team,bdelete_team&equalTo=1,0&select=id_team";
$totalTeam = CurlController::request($totalTeamUrl, "GET", array(), array())->total;

$style = array("bg-4","bg-5","bg-6","bg-11", "bg-11-2", "bg-11-3", "bg-13", "bg-14");

/*=============================================
Capturar las rutas de la URL
=============================================*/

$routesArray = explode("/", $_SERVER['REQUEST_URI']);

/*=============================================
Ajuste para Facebook
=============================================*/

if(!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])){

	if(!empty(array_filter($routesArray)[2])){

		$urlGet = explode("?", array_filter($routesArray)[2]);

		$urlParams = explode("&", $urlGet[0]);	
		
	}

}else{

	if(!empty(array_filter($routesArray)[1])){

		$urlGet = explode("?", array_filter($routesArray)[1]);

		$urlParams = explode("&", $urlGet[0]);		
		
	}

}

if(!empty($urlParams[0])){

	/*=============================================
	Filtrar grupos con el parámetro URL
    =============================================*/
    $url = API_BASE_URL . "clusters?linkTo=url_cluster,bdelete_cluster&equalTo=".$urlParams[0].",0&select=url_cluster";
    $urlClusters = CurlController::request($url, "GET", array(), array());		
    
    if($urlClusters->status == 404){

		/*=============================================
		Filtrar proyectos con el parámetro URL
	    =============================================*/
	    $url = API_BASE_URL . "projects?linkTo=url_project,bdelete_project&equalTo=".$urlParams[0].",0&select=url_project";
	    $urlProject = CurlController::request($url, "GET", array(), array());
	    
	    if($urlProject->status == 404){

			/*=============================================
		    Filtrar categorías con el parámetro URL
		    =============================================*/
		    $url = API_BASE_URL . "categories?linkTo=url_category,bdelete_category&equalTo=".$urlParams[0].",0&select=url_category";
		    $urlCategories = CurlController::request($url, "GET", array(), array());
		    
		    if($urlCategories->status == 404){

		    	/*=============================================
			    Filtrar subcategorías con el parámetro URL
			    =============================================*/

			    $url = API_BASE_URL . "subcategories?linkTo=url_subcategory,bdelete_subcategory&equalTo=".$urlParams[0].",0&select=url_subcategory";			    
			    $urlSubCategories = CurlController::request($url, "GET", array(), array());
			    
			    if($urlSubCategories->status == 404){

			    	/*=============================================
				    Filtrar productos con el parámetro URL
				    =============================================*/

				    $url = API_BASE_URL . "products?linkTo=url_product,bdelete_product&equalTo=".$urlParams[0].",0&select=url_product";				    
				    $urlProduct = CurlController::request($url, "GET", array(), array());
				    
				    if($urlProduct->status == 404){

				    	/*=============================================
					    Filtrar eventos con el parámetro URL
					    =============================================*/

					    $url = API_BASE_URL . "events?linkTo=url_event,bdelete_event&equalTo=".$urlParams[0].",0&select=url_event";					    
					    $urlEvents = CurlController::request($url, "GET", array(), array());
					    
					    if($urlEvents->status == 404){

					    	/*=============================================
						    Filtrar ferias con el parámetro URL
						    =============================================*/

						    $url = API_BASE_URL . "fairs?linkTo=url_fair,bdelete_fair&equalTo=".$urlParams[0].",0&select=url_fair";						    
						    $urlFairs = CurlController::request($url, "GET", array(), array());
						    						    
						    if($urlFairs->status == 404){

						    	/*=============================================
							    Filtrar muestras con el parámetro URL
							    =============================================*/

							    $url = API_BASE_URL . "samples?linkTo=url_sample,bdelete_sample&equalTo=".$urlParams[0].",0&select=url_sample";							    
							    $urlSample = CurlController::request($url, "GET", array(), array());

							    if($urlSample->status == 404){

							    	/*=============================================
								    Filtrar paginas con el parámetro URL
								    =============================================*/

								    $url = API_BASE_URL . "pages?linkTo=url_page,bdelete_page&equalTo=".$urlParams[0].",0&select=url_page";								    
								    $urlPages = CurlController::request($url, "GET", array(), array());
								    
								    if($urlPages->status == 404){

								    	/*=============================================
										Validar si hay parámetros de paginación
										=============================================*/
										if(isset($urlParams[1])){

											if(is_numeric($urlParams[1])){

												$startAt = ($urlParams[1]*6) - 6;

											}else{

											 	$startAt = null;

											}

										}else{

											$startAt = 0;

										}

										

							    	}

							    }

					    	}

				    	}

			    	}

		    	}

			}

		}

	}

}



?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<meta name="msapplication-TileColor" content="#0E0E0E">		
		<meta name="template-color" content="#0E0E0E">

		<meta name="description" content="<?= $company[0]->description_company ?>">

		<meta name="keywords" content="<?= $company[0]->keywords_company ?>">

		<meta name="author" content="<?= $company[0]->author_company ?>">

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $backoffice ?>views/assets/imgs/template/<?= $company[0]->icon_company ?>">

		<title><?= $company[0]->name_company ?> - <?= $company[0]->subtitle_company ?></title>

		<!--=====================================
		CSS
		======================================-->

		<link href="<?php echo $path ?>views/assets/css/style.css?v=3.0.0" rel="stylesheet">

	</head>

	<body>

		<?php 

			/*Preload*/
			include "modules/structure/preload.php";

			/*Tob bar*/
			include "modules/structure/top_bar.php";

			/*Header*/
			include "modules/structure/header.php";

			/*Header mobile*/
			include "modules/structure/header_mobile.php";

			/*Sidebar*/
			include "modules/structure/sidebar.php";

			/*Sidebar mobile*/
			include "modules/structure/sidebar_mobile.php";

			if(!empty($urlParams[0])){

				if($urlParams[0] == "account"){

					include "modules/pages/".$urlParams[0]."/".$urlParams[0].".php";	

				}else if($urlClusters->status == 200){

					/*Mostrar todos los proyectos por grupo*/
					include "modules/pages/clusters/clusters.php";

				}else if($urlProject->status == 200){

					/*Mostrar informacion del proyecto*/
					include "modules/pages/projects/project.php";

				}else if($urlCategories->status == 200){

					/*Listado de productos por categoria*/
					include "modules/pages/categories/categories.php";

				}else if($urlSubCategories->status == 200){

					/*Listado de productos por subcategoria*/
					include "modules/pages/subcategories/subcategories.php";

				}else if($urlProduct->status == 200){

					/*Mostrar informacion del producto de una tienda*/
					include "modules/pages/products/product.php";

				}else if($urlEvents->status == 200){

					/*Mostrar informacion de info evento*/
					include "modules/pages/events/event.php";

				}else if($urlFairs->status == 200){

					/*Mostrar informacion de info evento*/
					include "modules/pages/fairs/fair.php";

				}else if($urlSample->status == 200){

					/*Mostrar informacion sobre los proyectos ganadores*/
					include "modules/pages/samples/sample.php";

				}else if($urlPages->status == 200){

					include "modules/pages/".$urlPages->results[0]->url_page."/".$urlPages->results[0]->url_page.".php";

				}else{

					/*Mostrar informacion cuando no encuentra pagina*/
					include "modules/pages/404/404.php";

				}

			}else{

				/*Paginas*/
				include "modules/pages/base/base.php";

			}				

			/*Footer*/
			include "modules/structure/footer.php";


		?>

	    <!--=====================================
		PLUGINS JS
		======================================-->		

		<script src="<?php echo $path ?>views/assets/js/vendors/modernizr-3.6.0.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/jquery-3.6.0.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/waypoints.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/wow.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/magnific-popup.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/perfect-scrollbar.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/select2.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/isotope.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/scrollup.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/swiper-bundle.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/noUISlider.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/slider.js"></script>		
		<script src="<?php echo $path ?>views/assets/js/vendors/counterup.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/jquery.countdown.min.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/jquery.elevatezoom.js"></script>
		<script src="<?php echo $path ?>views/assets/js/vendors/slick.js"></script>
		<script src="<?php echo $path ?>views/assets/js/main.js?v=3.0.0"></script>
		<script src="<?php echo $path ?>views/assets/js/shop.js?v=1.2.1"></script>

	</body>

</html>