<?php

class m_Rayon extends CI_Model{
    public function GetAllRayon($numS){
        $sql = $this->db->query("select * from rayon where numSecteur = ".$numS);
       return $sql->result();
    }
}