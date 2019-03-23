<?php 
	class Modelbieumau extends CI_Model
	{

        // Ten table
        var $table = '';
        private $tbl_bieumau='bieumau';
    
		function __construct()
		{
			parent::__construct();
			$this->table = 'bieumau';
        }
        
        function getBieumau()
        {
            $this->db->select('*')
    		->from($this->tbl_bieumau);
    		$result=$this->db->get();
    		$result=$result->result_array();
    		return $result;
        }
        function thembieumau($data = array())
    	{
    		$this->db->insert('bieumau', $data);
        }
        
        function getById($id)
        {
            $result = $this->db->select('*')->from($this->tbl_bieumau)->where('ma_bm', $id)->get();
            return $result->row();
        }
        
	}
?>