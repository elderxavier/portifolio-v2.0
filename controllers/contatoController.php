<?php




class contatoController extends controller {

    
    public function index() {        
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');        
        $admin_email = 'eldersxavier@gmail.com'; // Your Email
        $message_min_length = 5; // Min Message Length
        
        //$contato = new Contact_Form($_POST, $admin_email, $message_min_length);
        $contato = new contato($_REQUEST, $admin_email, $message_min_length);
        $contact->sendRequest();

        //$dados = null;
        //$this->loadTemplate('home', $dados);
        //$this->loadViewInTemplate('blocks/pagination', $dados);
        
        //echo "OK";
        
         
        
    }

}