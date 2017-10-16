<?php

class Ctrl_Accueil extends CI_Controller{
    public function index(){
        $this->load->model("m_Secteur");
        $data["lesSecteurs"] = $this->m_Secteur->GetAllSecteur();
        $this->load->view("v_Accueil",$data);              
    }
    
     public function afficherLesRayons(){    
         $numS=$_GET['numS'];
         $this->load->model("m_Rayon"); 
         $data['lesRayons'] = $this->m_Rayon->GetAllRayon($numS);
         $this->load->view("v_Rayon",$data);
    }
//        public function afficherLesEmployes(){    
//         $numE=$_GET['numE'];
//         $this->load->model("m_Employe"); 
//         $data['lesEmployes'] = $this->m_Employe->GetAllEmploye($numE);
//         $this->load->view("v_Employe",$data);
//    }
}