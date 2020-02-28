<?php
namespace Controller;

class Controller {
    //não pode ser private, porque o private não passa para as classes filhos, por isso, o protected
    //função para o nome da pasta ir direto, sem precisar ter que colocar o caminho todo, toda vez. Nesse caso, o $caminho é substituido pela pasta da vez, como um coringa 
    protected function view($pagina) {
        require "./View//$pagina.php";
    }
}
