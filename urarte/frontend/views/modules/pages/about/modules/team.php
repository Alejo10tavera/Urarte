<h5 class="color-gray-500 mb-10">Nuestro grandioso equipo</h5>
<h2 class="mb-40">Las personas que trabajan en <?= $company[0]->name_company; ?> comparten la visión y los valores de nuestra comunidad.</h2>
<div class="row mb-50">

	<?php 

		$randomStartT = rand(0, ($totalTeam-8));

		$url = API_BASE_URL . "team?linkTo=status_team,bdelete_team&equalTo=1,0&orderBy=id_team&orderMode=DESC&startAt=".$randomStartT."&endAt=8&select=name_team,image_team,position_team";

        $teams = CurlController::request($url, "GET", array(), array())->results;
        
        if(is_array($teams)){

        	foreach ($teams as $key => $value) {
        		
        		echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				        <div class="card-staff hover-up">
				            <div class="image-staff"><img src="'.$backoffice.'views/assets/imgs/team/'.$value->image_team.'" alt="'.$company[0]->name_company.'"></div>
				            <div class="info-staff">
				                <h5>'.$value->name_team.'</h5>
				                <p class="font-md color-gray-500">'.$value->position_team.'</p>
				            </div>
				        </div>
				    </div>';

        	}

        }

	?>

				    
</div>