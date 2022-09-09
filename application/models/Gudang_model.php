<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Gudang_model extends CI_Model 
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('tbl_gudang');
        $this->db->join('tbl_rak', 'tbl_gudang.id_rak = tbl_rak.id');

        return $this->db->get()->result();
    }    

    public function selectLok()
    {
        $this->db->select('*');
        $this->db->from('tbl_rak');

        return $this->db->get()->result();

    }

    public function delete($gudang){
        $this->db->where('id_gudang', $gudang);
        $this->db->delete('tbl_gudang');
    }

    public function update(){
        
    }
                        
}