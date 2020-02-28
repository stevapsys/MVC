<?php
//para nomear o tipo de form que é esse. É o 'nome' dele
namespace Controller;


class FormController extends Controller{
    function form() {
        $this->view('form');
    } 

    function post () {
        //SALVA DADOS NO JSON
        //OU SALVA NO
        header("location: /");
    }
}