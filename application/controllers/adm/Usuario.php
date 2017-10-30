<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    function _contruct(){
        
        parent::__construct();
      
    }
    
    

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function verificar_sessao(){
            if($this->session->userdata('logado')==false){
                redirect('adm/dashboard/login');
                
            }
        }
    public function index($indice=null)
	{
                $this->verificar_sessao();
                $this->load->model('usuario_model','usuario');
                $dados['usuario'] = $this->usuario->get_usuario();
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                if($indice==1){
                    $data['msg'] = "Usuário cadastrado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar o usuário.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==3){
                    $data['msg'] = "Usuário excluído com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o usuário.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==5){
                    $data['msg'] = "Usuário atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==6){
                    $data['msg'] = "Não foi possível atualizar o usuário.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
                
                $this->load->view('listar_usuario',$dados);
                $this->load->view('includes/html_footer');
	}
        public function cadastro()
	{
                $this->verificar_sessao();
                $this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('cadastro_usuario');
                $this->load->view('includes/html_footer');
	}
        public function cadastrar(){   
            $this->verificar_sessao();
            
              $this->load->model('usuario_model','usuario');
               $data['nome_usuario'] = $this->input->post('nome');
                $data['email_usuario'] = $this->input->post('email');
                $data['senha_usuario'] = md5($this->input->post('senha'));
                $data['nivel_usuario'] = $this->input->post('nivel');
                
            
                if($this->usuario->cadastrar($data)){
                    redirect('adm/usuario/index/1');
                }else{
                    redirect('adm/usuario/index/2');
                }     
	}
        public function salvar_atualizacao()
	{
            
            $this->verificar_sessao();
            
               $this->load->model('usuario_model','usuario'); 
               $id = $this->input->post('id_usuario');
                $data['nome_usuario'] = $this->input->post('nome');
                $data['email_usuario'] = $this->input->post('email');
                $data['nivel_usuario'] = $this->input->post('nivel');
                if($this->usuario->salvar_atualizacao($data,$id)){
                    redirect('adm/usuario/index/5');
                }else{
                    redirect('adm/usuario/index/6');
                }     
	}
        
        public function exclfuir($id=null){
            $this->verificar_sessao();
            $this->load->model('usuario_model','usuario');
            
            if($this->usuario->excluir($id)){
                    redirect('adm/usuario/index/3');
                }else{
                    redirect('adm/usuario/index/4');
                }
            
        }
        public function atualizar($id=null,$indice=null){
            $this->verificar_sessao();
            $this->db->where('id_usuario',$id);
            $data['usuario'] = $this->db->get('usuario')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if($indice==1){
                    $data['msg'] = "Senha atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível atualizar a senha.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
        $this->load->view('editar_usuario',$data);
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
