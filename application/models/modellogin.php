<?php 
	class Modellogin extends CI_Model {
          
     // private $tbl_nguoiduong='nguoidung';
     function __construct() {
          parent::__construct();
          
     }

     public function log_in_correctly() {  
  
          $this->db->where('username', $this->input->post('username'));  
          $this->db->where('password', $this->input->post('password'));  
          $query = $this->db->get('login');  
           if ($query->num_rows() == 1)  
          {  
              return true;  
          } 
          else 
          {  
              return false;  
          }  
    
     }

     // function addUser($data)
     // {
     //      $this->db->insert($this->tbl_nguoidung,$data);
     // }
}  
?>