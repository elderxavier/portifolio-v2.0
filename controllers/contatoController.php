<?php


class contatoController extends Controller {
    
    public function index() {        
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');        
        $admin_email = 'eldersxavier@gmail.com'; // Your Email
        $message_min_length = 5; // Min Message Length     
        $contato = new Contato($_REQUEST, $admin_email, $message_min_length);
        $contato->sendRequest();        
    }

}