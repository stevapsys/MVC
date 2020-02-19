<?php

class FormController {
    function form() {
        require('View/form.php');
    } 

    function home() {
        require('View/home.php');
    }

    function post () {
        //SALVA DADOS NO JSON
        //OU SALVA NO
        header("location: /");
    }
}