<?php

class Refeicao_model extends CI_Model{
   
    
    
    public function cadastrar($data){
                //$this->verificar_sessao();
                             return $this->db->insert('refeicao',$data);
	}
        public function excluir($id=null){
            $this->db->where('id_refeicao',$id);
            return $this->db->delete('refeicao');
        }
 /*  
        
        
    public function salvar_atualizacao()
	{
                //$this->verificar_sessao();
                $id = $this->input->post('id_usuario');
                $data['nome_usuario'] = $this->input->post('nome');
                $data['cpf_usuario'] = $this->input->post('cpf');
                $data['email_usuario'] = $this->input->post('email');
                //$data['senha_usuario'] = md5($this->input->post('senha'));
                $data['status_usuario'] = $this->input->post('status');
                $data['nivel_usuario'] = $this->input->post('nivel');
                $data['id_cidade_usuario'] = $this->input->post('cidade');
               
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
        
        
    } */  
        
    public function salvar_atualizacao($data,$id)
	{
                //$this->verificar_sessao();
                
               
                $this->db->where('id_refeicao',$id);
               return $this->db->update('refeicao',$data);
	}
    public function get_refeicao(){
                $this->db->select('*');
                return $this->db->get('refeicao')->result();
    }
    public function get_cidades(){
    return $this->db->get('tbl_cidade')->result();
    }
        
    public function RefeicaoDoDia($tipo) {
        
        $this->db->select('*');
        
        $this->db->join('tipo', 'id_tipo = tipo_id_tipo');
        
        $this->db->where('data_refeicao', date('Y-m-d'));
        $this->db->where('nome_tipo', $tipo);
        
        $dados =  $this->db->get('refeicao')->result();
        
        if(count($dados)) {
            
            return $dados[0];
        }
        else {
            
            return null;
        }
    }
}