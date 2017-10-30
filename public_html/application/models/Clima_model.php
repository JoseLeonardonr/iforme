<?php

class Clima_model extends CI_Model {

    function _contruct() {

        parent::__construct();
    }

    public function cadastrar($data) {
        return $this->db->insert('dados_climatologicos', $data);
    }

    public function excluir($id = null) {
        $this->db->where('id_dados_climatologicos', $id);
        return $this->db->delete('dados_climatologicos');
    }

    public function salvar_atualizacao($id, $data) {
        $this->db->where('id_dados_climatologicos', $id);
        return $this->db->update('dados_climatologicos', $data);
    }

    public function get_clima() {
        $this->db->select('*');
        return $this->db->get('dados_climatologicos')->result();
    }
    public function get_dados($id) {
        $this->db->where('id_dados_climatologicos', $id);
        return $this->db->get('dados_climatologicos')->result();
    }
    

  

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

