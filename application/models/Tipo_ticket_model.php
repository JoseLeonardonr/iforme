<?php

class Tipo_ticket_model extends CI_Model{
    
    public function BuscarParaSelect(){
        
        $this->db->select('*');
        
        $tipos = $this->db->get('tipo_ticket')->result();
        
        $retorno = array('' => 'Selecione');
        
        foreach ($tipos as $tipo) {
            
            $retorno[$tipo->id] = $tipo->nome;
        }
        
        return $retorno;
    }
    
    public function BuscarTodos() {
        
        $this->db->select('t.nome, v.valor_ticket');
        
        $this->db->join('valor_ticket as v', 't.id = v.id_tipo_ticket and v.id_ticket = (select max(id_ticket) from valor_ticket where id_tipo_ticket = t.id)');
        
        $this->db->order_by('t.nome');
        $this->db->order_by('v.id_ticket', 'asc');
        
        $this->db->group_by('t.id');
        
        return $this->db->get('tipo_ticket as t')->result();
    }
}