<?php 

	/*=============================================
	Traer datos primera sección
	=============================================*/

	$select = "titleone_template,textone_template,texttwo_template,imageone_template,list_template";

	$aboutOneUrl = API_BASE_URL . "templates?linkTo=code_template,status_template,bdelete_template&equalTo=about_us,1,0&select=".$select;

	$aboutOne = CurlController::request($aboutOneUrl, "GET", array(), array())->results;
	

?>

<h5 class="color-gray-500 mb-10">Acerca de</h5>

<h2><?= $aboutOne[0]->titleone_template ?></h2>

<div class="row mt-20">

    <div class="col-lg-6">

        <p class="font-sm font-medium color-gray-700 mb-15"><?= $aboutOne[0]->textone_template ?></p>
        <p class="font-sm font-medium color-gray-700 mb-15"><?= $aboutOne[0]->texttwo_template ?></p>
        

        <ul class="list-services mt-20">

        	<?php 

        		$list = json_decode($aboutOne[0]->list_template, true);

        		if (is_array($list)) {  

	        		foreach ($list as $key => $value) {
	        			
	        			echo '<li class="hover-up">'.$value.'</li>';

	        		}

        		}

        	?>

        </ul>

    </div>

    <div class="col-lg-6">
    	<img src="<?php echo $backoffice ?>views/assets/imgs/template/<?= $aboutOne[0]->imageone_template ?>" alt="<?= $company[0]->name_company ?>">
    </div>

</div>