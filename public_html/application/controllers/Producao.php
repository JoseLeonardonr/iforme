<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producao extends CI_Controller {

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
                $this->load->model('producao_model','producao');
                $dados['producao'] = $this->producao->get_producao();
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                
                if($indice==1){
                    $data['msg'] = "Lote cadastrado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar o lote.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==3){
                    $data['msg'] = "Lote excluído com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o lote.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==5){
                    $data['msg'] = "Lote atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==6){
                    $data['msg'] = "Não foi possível atualizar o lote.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
                
                $this->load->view('listar_producao',$dados);
                $this->load->view('includes/html_footer');
                 
                
                
	}
        
         public function cadastro()
	{
            $this->load->model('producao_model','producao');
            $data['classificacao'] = $this->producao->get_classificacao();
            $data['tipo'] = $this->producao->get_tipo();
                $this->verificar_sessao();
                $this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('cadastro_producao',$data);
                $this->load->view('includes/html_footer');
	}
       
        public function cadastrar(){   
            $this->verificar_sessao();
            $data['nome_producao'] = $this->input->post('nome_lote');
            $data['data_plantacao'] = $this->input->post('data_plant');
            $data['tipo_alface_id'] = $this->input->post('tipo');
            $data['quant_bandeja'] = $this->input->post('quant_band');
            $data['nivel_praga'] = $this->input->post('nivel_praga');
            $data['data_colheita'] = $this->input->post('data_co');
            $data['classificacao_id'] = $this->input->post('classificacao');
            $this->load->model('producao_model','producao');
                if($this->producao->cadastrar($data)){
                    redirect('producao/index/1');
                    
                }else{
                    redirect('producao/index/2');
                }     
	}
        
        public function excluir($id=null){
            $this->verificar_sessao();
            $this->load->model('producao_model','producao');
            
            if($this->producao->excluir($id)){
                    redirect('producao/index/3');
                }else{
                    redirect('producao/index/4');
                }
            
        }
        
        public function atualizar($id = null, $indice = null) {
        $this->verificar_sessao();
        $this->db->where('id_producao', $id);
        $data['producao'] = $this->db->get('producao_alface')->result();
        $data['tipo'] = $this->db->get('tipo_alface')->result();
        $data['classificacao'] = $this->db->get('classificacao_alface')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('editar_producao', $data);
        $this->load->view('includes/html_footer');
    }
        
        public function salvar_atualizacao() {
        $id = $this->input->post('id_producao');
        $data['nome_producao'] = $this->input->post('nome_lote');
        $data['data_plantacao'] = $this->input->post('data_plant');
        $data['tipo_alface_id'] = $this->input->post('tipo');
        $data['quant_bandeja'] = $this->input->post('quant_band');
        $data['nivel_praga'] = $this->input->post('nivel_praga');
        $data['data_colheita'] = $this->input->post('data_co');
        $data['classificacao_id'] = $this->input->post('classificacao');
        $this->load->model('producao_model', 'producao');
        if ($this->producao->salvar_atualizacao($id, $data)) {
            redirect('producao/index/5');
        } else {
            redirect('producao/index/6');
        }
    }

}
