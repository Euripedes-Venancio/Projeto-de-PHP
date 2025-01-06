<?php
$pagina = "main-quem-sou.php";

if (isset($_GET["pagina"])){
	$pagina = $_GET["pagina"];
}

include "header.php";

switch ($pagina){
	case "main-quem-sou.php":
		include "main-quem-sou.php";
		break;

	case "main-residencia.php":
		include "main-residencia.php";
		break;

	case "main-formacao.php":
		include "main-formacao.php";
		break;

	case "main-experiencia.php":
		include "main-experiencia.php";
		break;

}
include "footer.php";
