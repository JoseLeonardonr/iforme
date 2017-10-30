<?php

class Usuario_model extends CI_Model{
    function _contruct(){
        
        parent::__construct();
        
    }
    
    
    public function cadastrar(){
                //$this->verificar_sessao();
                $data['nome_usuario'] = $this->input->post('nome');
                $data['cpf_usuario'] = $this->input->post('cpf');
                $data['email_usuario'] = $this->input->post('email');
                $data['senha_usuario'] = md5($this->input->post('senha'));
                $data['status_usuario'] = $this->input->post('status');
                $data['nivel_usuario'] = $this->input->post('nivel');
                $data['id_cidade_usuario'] = $this->input->post('cidade');
               
                
                return $this->db->insert('tbl_usuario',$data);
	}
    public function excluir($id=null){
            $this->db->where('id_usuario',$id);
            return $this->db->delete('tbl_usuario');
        }
        
        
    public function salvar_atualizacao($id,$data)
	{
                $this->db->where('id_usuario',$id);
               return $this->db->update('tbl_usuario',$data);
	}
        
        public function salvar_senha(){
        
        $id = $this->input->post('id_usuario');
        
        $senha_antiga = md5($this->input->post('senha_antiga'));
        $senha_nova = md5($this->input->post('senha_nova'));
        
        $this->db->select('senha_usuario');
        $this->db->where('id_usuario',$id);
        $data['senha_usuario'] = $this->db->get('tbl_usuario')->result();
        $dados['senha_usuario'] = $senha_nova;
        
        if($data['senha_usuario'][0]->senha_usuario==$senha_antiga){
            $this->db->where('id_usuario',$id);
            $this->db->update('tbl_usuario',$dados);
            return true;
        }else{
            redirect('usuario/atualizar/'.$id.'/2');
            return false;
        }
        
        
    }
    public function get_usuario(){
                $this->db->select('*');
                $this->db->join('tbl_cidade','id_cidade=id_cidade_usuario','inner');
                return $this->db->get('tbl_usuario')->result();
    }
    public function get_cidades(){
    return $this->db->get('tbl_cidade')->result();
    }
        
        
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

