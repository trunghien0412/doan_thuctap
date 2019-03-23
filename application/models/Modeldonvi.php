<?php
 
class Modeldonvi extends CI_Model{

    // Ten table
    var $table = '';

    var $id = 'id';

    private $tbl_donvi='donvi';
    
    function __construct() {
        parent::__construct();
    }
    
    function getDonvi()
    {
        $this->db->select('*')
		->from($this->tbl_donvi);
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
    }
    
    function themdonvi($data = array())
	{
		$this->db->insert('donvi', $data);
    }
    
    function suadonvi($id, $data)
	{
		$this->db->update('donvi',$data, array('id' => $id));
        if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		
		return FALSE;
	}
    
    function xoadonvi($id)
    {
        $this->db->delete('donvi',array('id'=>$id));
        if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		
		return FALSE;
    }
    
    function get_info($id, $field = '')
	{
		$result = $this->db->select($field)
                    ->where(array('id'=>$id))
                    ->from('donvi')
                    ->get();
       if($result->num_rows() > 0){
            return $result->row_array();
       } 
       return false;
	}
}