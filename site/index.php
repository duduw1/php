<?php
/* Define a pagina atual pela url */

$pagina = 'home'; 

if (isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
/* carrega o header.php */

include 'header.php';

/*carrega pagina escolhida pelo usuario */
switch ($pagina){
    case 'equipe':
        include 'equipe.php';
        break;
    default:
    include 'home.php';
    break;
}
/* carrega o footer */

include 'footer.php';