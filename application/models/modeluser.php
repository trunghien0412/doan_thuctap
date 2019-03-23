<?php
 
class Modeluser extends CI_Model{

    // Ten table
    var $table = '';

    var $id = 'id';

    private $tbl_nguoidung='nguoidung';
    private $tbl_diagioi='diagioi';
    private $tbl_donvi='donvi';
    function __construct() {
        parent::__construct();
    }
     
    public function getList(){
        $this->db->select('*')
		->from($this->tbl_nguoidung);
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
    }
    
    function getDiagioi()
    {
        $this->db->select('*')
		->from($this->tbl_diagioi);
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
    }
    
    function getDonvi()
    {
        $this->db->select('*')
		->from($this->tbl_donvi);
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
    }
    
    function themuser($data = array())
	{
		$this->db->insert('nguoidung', $data);
    }
    
    function suauser($id, $data)
	{
		$this->db->update('nguoidung',$data, array('id' => $id));
        if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		
		return FALSE;
	}
    
    function xoauser($id)
    {
        $this->db->delete('nguoidung',array('id'=>$id));
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
                    ->from('nguoidung')
                    ->get();
       if($result->num_rows() > 0){
            return $result->row_array();
       } 
       return false;
	}
}