<?php
 
class Modeldiagioi extends CI_Model{

    // Ten table
    var $table = '';

    var $id = 'id';
    private $tbl_diagioi='diagioi';
    
    function getDiagioi()
    {
        $this->db->select('*')
		->from($this->tbl_diagioi);
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
    }
    
    function themdiagioi($data = array())
	{
		$this->db->insert('diagioi', $data);
    }
    
    function xoadiagioi($id)
    {
        $this->db->delete('diagioi',array('id'=>$id));
        if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		
		return FALSE;
    }
    
    function suadiagioi($id, $data)
	{
        $this->db->update('diagioi',$data, array('id' => $id));
        if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		
		return FALSE;
	}
    
    function get_info($id, $field = '*')
	{
	  $result = $this->db->select($field)
                    ->where(array('id'=>$id))
                    ->from('diagioi')
                    ->get();
       if($result->num_rows() > 0){
            return $result->row_array();
       } 
       return false;
	}
}