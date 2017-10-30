<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
                redirect('dashboard/login');
                
            }
        }
    public function index($indice=null)
	{
                $this->verificar_sessao();
                $this->load->model('Usuario_model','usuario');
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
            $this->load->model('usuario_model','usuario');
                $this->verificar_sessao();
                $dados['cidades'] = $this->usuario->get_cidades();
                $this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('cadastro_usuario',$dados);
                $this->load->view('includes/html_footer');
	}
        public function cadastrar(){   
            $this->verificar_sessao();
            $this->load->model('usuario_model','usuario');
                if($this->usuario->cadastrar()){
                    redirect('usuario/1');
                }else{
                    redirect('usuario/2');
                }     
	}
        public function salvar_atualizacao()
	{
                $id = $this->input->post('id_usuario');
                $data['nome_usuario'] = $this->input->post('nome');
                $data['cpf_usuario'] = $this->input->post('cpf');
                $data['email_usuario'] = $this->input->post('email');
                $data['status_usuario'] = $this->input->post('status');
                $data['nivel_usuario'] = $this->input->post('nivel');
                $data['id_cidade_usuario'] = $this->input->post('cidade');
                $this->verificar_sessao();
                $this->load->model('usuario_model','usuario'); 
                if($this->usuario->salvar_atualizacao($id,$data)){
                    redirect('usuario/5');
                }else{
                    redirect('usuario/6');
                }     
	}
        
        public function excluir($id=null){
            $this->verificar_sessao();
            $this->load->model('usuario_model','usuario');
            
            if($this->usuario->excluir($id)){
                    redirect('usuario/3');
                }else{
                    redirect('usuario/4');
                }
            
        }
        public function atualizar($id = null, $indice = null) {
        $this->verificar_sessao();
        $this->db->where('id_usuario', $id);
        $data['usuario'] = $this->db->get('tbl_usuario')->result();
        $data['cidades'] = $this->db->get('tbl_cidade')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Senha atualizado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível atualizar a senha.";
            $this->load->view('includes/msg_sucesso', $data);
        }
        $this->load->view('editar_usuario', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_senha(){
        $this->verificar_sessao();
        $this->load->model('usuario_model','usuario');
        
        $id = $this->input->post('id_usuario');
        
        
        if($this->usuario->salvar_senha()){
            
            redirect('usuario/atualizar/'.$id.'/1');
        }else{
            redirect('usuario/atualizar/'.$id.'/2');
        }
        
        
    }
   
     
}