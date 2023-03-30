<?php 

	/*=============================================
	Traer datos primera sección
	=============================================*/

	$select = "titleone_template,textone_template,texttwo_template,imageone_template";

	$aboutOneUrl = API_BASE_URL . "templates?linkTo=code_template,status_template,bdelete_template&equalTo=partners,1,0&select=".$select;

	$partners = CurlController::request($aboutOneUrl, "GET", array(), array())->results;
	

?>

<h2><?= $partners[0]->titleone_template ?></h2>

<div class="row mt-20">

	<div class="col-lg-6">
		<img src="<?php echo $backoffice ?>views/assets/imgs/template/<?= $partners[0]->imageone_template ?>" alt="<?= $company[0]->name_company ?>">
	</div>

	<div class="col-lg-6">

		<p class="font-sm font-medium color-gray-700 mb-15"><?= $partners[0]->textone_template ?></p>
		<p class="font-sm font-medium color-gray-700 mb-15"><?= $partners[0]->texttwo_template ?></p>

	</div>
	
</div>

<div class="border-1 mb-80 mt-50"></div>