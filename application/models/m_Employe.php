<?php

class m_Employe extends CI_Model{
    public function GetAllEmploye($numRE){
        $sql = $this->db->query("select * from employe, travailler where codeE=".$numE);
       return $sql->result();
    }
}