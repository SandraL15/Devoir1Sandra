<?php

class m_Secteur extends CI_Model{
    public function GetAllSecteur(){
        $sql = $this->db->query("select * from secteur");
       return $sql->result();
    }
}