<?php
//inclui a função de autload que criamos 
require "autoload.php";
//use - nome da pasta - nome do arquivo. Para funcionar, o namespace tem que estar declarado
use Controller\HomeController; 
use Controller\FormController;

//echo $_SERVER['REQUEST_URI']; die; 

//if($_SERVER['REQUEST_URI'] === '/stephanie/mvc/formulario') {
    // $obj = new FormController;
    // $obj->form();

//} else if($_SERVER['REQUEST_URI'] === '/stephanie/mvc/') {
//    $obj = new FormController ();
//    $obj -> home();
//} else {
//echo "404 - NÃO ENCONTRADO";
//}

//para colocar o caminho das pastas
// $_SERVER['REQUEST_URI'] serve para colocar o caminho depois do localhost (raiz)
//str_replace é para colocar as pastas que vem antes dá página que você quer acessar
$path = str_replace('/stephanie/mvc', '', $_SERVER['REQUEST_URI']);

//switch é para trocar por tudo que está na váriavel $path
switch($path) {
    case '/formulario':
        $obj = new FormController();
        $obj->form();
    break;
    case "":
    case "/":
        $obj = new HomeController();
        $obj->home();
    break;
    case "/post":
        $obj = new FormController();
        $obj->post();
        break;
    default:
        echo "404 - NÃO ENCONTRADO";
}

?>