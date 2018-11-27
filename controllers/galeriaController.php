<?php
class galeriaController extends controller{


    public function index(){
       $dados = array(
           'qt' => 17
       );

       $this->loadTemplate('galeria', $dados);
    }

  

}