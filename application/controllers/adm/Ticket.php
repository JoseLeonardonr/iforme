<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {
    function __contruct(){
        
        parent::__construct();
      
        $this->load->model('Tipo_ticket_model');
    }
    
    
  public function verificar_sessao(){
            if($this->session->userdata('logado')==false){
                redirect('adm/dashboard/login');
                
            }
        }
    public function index($indice=null)
	{
                $this->verificar_sessao();
                $this->load->model('Ticket_model','ticket');
                $dados['ticket'] = $this->ticket->get_ticket();
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                if($indice==1){
                    $data['msg'] = "ticket cadastrada com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar a ticket.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==3){
                    $data['msg'] = "ticket excluído com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o ticket.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
                
                $this->load->view('listar_ticket',$dados);
                $this->load->view('includes/html_footer');
	}
        public function cadastro()
	{
                $this->verificar_sessao();
                $this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->model('tipo_ticket_model');
                $dados = array(
                    'tiposTickets' => $this->tipo_ticket_model->BuscarParaSelect()
                );
                $this->load->view('cadastro_ticket', $dados);
                $this->load->view('includes/html_footer');
	}
        public function cadastrar(){   
            $this->verificar_sessao();
            
                $this->load->model('Ticket_model','ticket');
                $data['data_cadastro'] = date('Y-m-d H:i');
                $data['valor_ticket'] = $this->input->post('valor');
                $data['id_tipo_ticket'] = $this->input->post('tipo');
                if($this->ticket->cadastrar($data)){
                    redirect('adm/ticket/index/1');
                }else{
                    redirect('adm/ticket/index/2');
                }     
	}
        
        
        public function excluir($id=null){
            $this->verificar_sessao();
            $this->load->model('Ticket_model','ticket');
            
            if($this->ticket->excluir($id)){
                    redirect('adm/ticket/index/3');
                }else{
                    redirect('adm/ticket/index/4');
                }
            
        }
       
   
     
}
