<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index(){

        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        $this->render('index', 'layout1');
        "aaaaaa";

    }

    public function sobreNos(){
        
        $this->view->dados = array('Notebook', 'Smartphone');
        $this->render('sobreNos','layout1');

    }

}

?>