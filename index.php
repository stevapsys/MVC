<?php
require "Controller/formController.php";

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

switch($_SERVER['REQUEST_URI']) {
    case '/stephanie/mvc/formulario':
        $obj = new FormController();
        $obj->form();
    break;
    case "/stephanie/mvc/":
        $obj = new FormController();
        $obj->home();
    break;
    case "/stephanie/mvc/post":
        $obj = new FormController();
        $obj->post();
        break;
    default:
        echo "404 - NÃO ENCONTRADO";
}

?>