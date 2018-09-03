<?php




class homeController extends Controller {

    public function __construct() {
        parent::__construct();        
        //$u = new Usuarios();
        //$u->verificarLogin();
    }

    public function index() {                
        $projetosModel = new Projetos();         
        $dados = array(
            'teste' => 123,
            'projetosModel' => $projetosModel
        );         
        $this->loadTemplate('home', $dados);        
        //$this->loadViewInTemplate('blocks/pagination', $dados);         
        
    }

}