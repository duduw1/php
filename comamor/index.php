<?php 

/* 
Site: betabase
Autor: Diego Mariano
Data: 30 de maio, 2017
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;

	case 'contato':
		include 'app/views/contato.php';
		break;

	case 'coisas':
		include 'app/views/coisas.php';
		break;

	case 'datas':
		include 'app/views/datas.php';
		break;
	
	case 'fotos':
		include 'app/views/fotos.php';
		break;
		
	case 'ideias':
		include 'app/views/ideias.php';
		break;

	case 'locais':
		include 'app/views/locais.php';
		break;

	default:
		include 'app/views/home.php';
		break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';