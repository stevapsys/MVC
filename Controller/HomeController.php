<?php

namespace  Controller;

//a classe home controller está pegando as infos da classe mãe Controller
class HomeController extends Controller {
    function home() {
        //$this->view é para chamar a ação
        $this->view ('home');
    }
}