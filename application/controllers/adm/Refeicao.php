<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refeicao extends CI_Controller {
    function _contruct(){
        
        parent::__construct();
      
    }
    
    
  public function verificar_sessao(){
            if($this->session->userdata('logado')==false){
                redirect('adm/dashboard/login');
                
            }
        }
    public function index($indice=null)
	{
                $this->verificar_sessao();
                $this->load->model('refeicao_model','refeicao');
                $dados['refeicao'] = $this->refeicao->get_refeicao();
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                if($indice==1){
                    $data['msg'] = "Refeição cadastrada com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar a refeicao.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==3){
                    $data['msg'] = "Refeição excluído com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o refeição.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==5){
                    $data['msg'] = "Refeição atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==6){
                    $data['msg'] = "Não foi possível atualizar o refeicao.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
                
                $this->load->view('listar_refeicao',$dados);
                $this->load->view('includes/html_footer');
	}
        public function cadastro()
	{
                $this->verificar_sessao();
                $this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('cadastro_refeicao');
                $this->load->view('includes/html_footer');
	}
        public function cadastrar(){   
            $this->verificar_sessao();
            
                $this->load->model('refeicao_model','refeicao');
                $data['data_refeicao'] = $this->input->post('data_ref');
                $data['acomp1_refeicao'] = $this->input->post('acomp_1');
                $data['acomp2_refeicao'] = $this->input->post('acomp_2');
                $data['guarnicao1_refeicao'] = $this->input->post('guarni_1');
                $data['guarnicao2_refeicao'] = $this->input->post('guarni_2');
                $data['salada_refeicao'] = $this->input->post('salada');
                $data['tipo_id_tipo'] = $this->input->post('tipo');
                if($this->refeicao->cadastrar($data)){
                    redirect('adm/refeicao/index/1');
                }else{
                    redirect('adm/refeicao/index/2');
                }     
	}
        public function salvar_atualizacao()
	{
            
            $this->verificar_sessao();
            
                
                $this->load->model('refeicao_model','refeicao');
                $id = $this->input->post('id_refeicao');
                $data['data_refeicao'] = $this->input->post('data_ref');
                $data['acomp1_refeicao'] = $this->input->post('acomp_1');
                $data['acomp2_refeicao'] = $this->input->post('acomp_2');
                $data['guarnicao1_refeicao'] = $this->input->post('guarni_1');
                $data['guarnicao2_refeicao'] = $this->input->post('guarni_2');
                $data['salada_refeicao'] = $this->input->post('salada');
                $data['tipo_id_tipo'] = $this->input->post('tipo');
                if($this->refeicao->salvar_atualizacao($data,$id)){
                    redirect('adm/refeicao/index/5');
                }else{
                    redirect('adm/refeicao/index/6');
                }     
	}
        
        public function excluir($id=null){
            $this->verificar_sessao();
            $this->load->model('refeicao_model','refeicao');
            
            if($this->refeicao->excluir($id)){
                    redirect('adm/refeicao/index/3');
                }else{
                    redirect('adm/refeicao/index/4');
                }
            
        }
        public function atualizar($id=null,$indice=null){
            $this->verificar_sessao();
            $this->db->where('id_refeicao',$id);
            $data['refeicao'] = $this->db->get('refeicao')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if($indice==1){
                    $data['msg'] = "Senha atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível atualizar a senha.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
        $this->load->view('editar_refeicao',$data);
        $this->load->view('includes/html_footer');
    }
        
    
    public function salvar_senha(){
        $this->verificar_sessao();
        $this->load->model('usuario_model','usuario');
        
        $id = $this->input->post('id_usuario');
        
        
        if($this->usuario->salvar_senha()){
            
            redirect('adm/usuario/atualizar/'.$id.'/1');
        }else{
            redirect('adm/usuario/atualizar/'.$id.'/2');
        }
        
        
    }
   
     
}
