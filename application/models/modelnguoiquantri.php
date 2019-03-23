<?php 
	class Modelnguoiquantri extends CI_Model
	{

        // Ten table
        var $table = '';
    
		function __construct()
		{
			parent::__construct();
			$this->table = 'nguoiquantri';
        }
        
        function check_exists($where = array())
        {
            $this->db->where($where);
            $query = $this->db->get($this->table);
            if($query->num_rows() > 0){
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
        
	}
?>