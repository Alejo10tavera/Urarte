<?php 

class TemplateController{

	/*=============================================
	Traemos la Vista Principal de la plantilla
	=============================================*/

	public function index(){

		include "views/start.php";

	}

	/*=============================================
	Ruta Principal o Dominio del sitio
	=============================================*/

	static public function path(){

		return "http://urarte.com/";

	}

	/*=============================================
	Ruta BackOffice o Dominio administrativo del sitio
	=============================================*/

	static public function backoffice(){

		return "http://urarte.backoffice.com/";

	}

	/*=============================================
	Función para mayúscula inicial
	=============================================*/

	static public function capitalize($value){

		$text = str_replace("_", " ", $value);

		return ucwords($text);
		
	}

	/*=============================================
	Función para traer productos
	=============================================*/
	static public function random($total, $select, $rel, $type, $linkTo, $equalTo, $orderBy, $orderMode, $endAt){

	 	$randomStart = rand(0, $total);

	 	$url = API_BASE_URL . "relations?rel=".$rel."&type=".$type."&linkTo=".$linkTo."&equalTo=".$equalTo."&orderBy=".$orderBy."&orderMode=".$orderMode."&startAt=".$randomStart."&endAt=".$endAt."&select=".$select;

	 	$response = CurlController::request($url, "GET", array(), array())->results;

	 	return $response;

	}

}