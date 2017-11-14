<?php

class Informacoes_model extends CI_Model{
    
    public function Informacoes() {
        
        $this->db->select('*');
        
        $info = $this->db->get('informacoes')->result();
        
        return $info[0];
    }
}