<?php
class homeController extends controller {

    public function index(){
        $dados = array(
            'quantidade' => 5,
            'nome' => 'Lucas'
        );

        $this->loadTemplate('home', $dados);
        

    }

   

}