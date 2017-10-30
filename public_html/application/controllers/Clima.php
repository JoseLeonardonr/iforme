<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clima extends CI_Controller {

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
                $this->load->model('clima_model','clima');
                $dados['clima'] = $this->clima->get_clima();
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                
                if($indice==1){
                    $data['msg'] = "Dados climatológicos cadastrado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar o Dados climatológicos.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==3){
                    $data['msg'] = "Dados climatológicos excluído com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o Dados climatológicos.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==5){
                    $data['msg'] = "Dados climatológicos atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==6){
                    $data['msg'] = "Não foi possível atualizar o Dados climatológicos.";
                    $this->load->view('includes/msg_sucesso',$data);
                }
                
                $this->load->view('listar_clima',$dados);
                $this->load->view('includes/html_footer');
                 
                
                
	}
        
         public function cadastro() {
        $this->load->model('clima_model', 'clima');
        $this->verificar_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_clima');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar(){   
            $this->verificar_sessao();
            $data['data_dados'] = $this->input->post('data_dados');
            $data['temp_media'] = $this->input->post('temp_media');
            $data['temp_max'] = $this->input->post('temp_max');
            $data['temp_min'] = $this->input->post('temp_min');
            $data['chuva'] = $this->input->post('chuva');
            $data['um_media'] = $this->input->post('um_media');
            $data['um_min'] = $this->input->post('um_min');
            $data['um_max'] = $this->input->post('um_max');
            $data['vento_max'] = $this->input->post('vento_max');
            $this->load->model('clima_model', 'clima');
                if($this->clima->cadastrar($data)){
                    redirect('clima/index/1');
                    
                }else{
                    redirect('clima/index/2');
                }     
	}
        
        public function excluir($id=null){
            $this->verificar_sessao();
            $this->load->model('clima_model', 'clima');
            
            if($this->clima->excluir($id)){
                    redirect('clima/index/3');
                }else{
                    redirect('clima/index/4');
                }
            
        }
        
        public function atualizar($id = null, $indice = null) {
        $this->verificar_sessao();
        $this->load->model('clima_model', 'clima');
        $data['clima'] = $this->clima->get_dados($id);

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('editar_clima', $data);
        $this->load->view('includes/html_footer');
    }
        
        public function salvar_atualizacao() {
        $id = $this->input->post('id_dados_climatologicos');
        $data['data_dados'] = $this->input->post('data_dados');
        $data['temp_media'] = $this->input->post('temp_media');
        $data['temp_max'] = $this->input->post('temp_max');
        $data['temp_min'] = $this->input->post('temp_min');
        $data['chuva'] = $this->input->post('chuva');
        $data['um_media'] = $this->input->post('um_media');
        $data['um_min'] = $this->input->post('um_min');
        $data['um_max'] = $this->input->post('um_max');
        $data['vento_max'] = $this->input->post('vento_max');
        $this->load->model('clima_model', 'clima');
        if ($this->clima->salvar_atualizacao($id, $data)) {
            redirect('clima/index/5');
        } else {
            redirect('clima/index/6');
        }
    }

}
