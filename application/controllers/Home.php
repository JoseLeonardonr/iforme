<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
      
        $this->load->model(array('tipo_ticket_model', 'informacoes_model'));
        
        $dados = array(
            'tiposTickets' => $this->tipo_ticket_model->BuscarTodos(),
            'informacoes'  => $this->informacoes_model->Informacoes()
        );
        
        $this->load->view('site/home', $dados);
    }
}
