<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class events_mdl extends CI_Model {
    private $table = "evenements";
    public function __construct(){
        parent::__construct();
         $this->load->database();
         
       
    }

    public function get_where($where=array()){
        if ( !is_array($where))
        {
            return FALSE;
        }
       $this->db->where('deleted',0); //ramene juste les deleted = 0 
       $query = $this->db->get_where($this->table, $where); 
       return $query;
    }
  
}