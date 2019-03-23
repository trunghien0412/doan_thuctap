<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Diagioi_Controller extends CI_Controller {

    function __construct()
	    {
		    parent::__construct();
            $this->load->model('Modeldiagioi');
        }
    function quanly_diagioi()
        {
            $arr_Users2=$this->Modeldiagioi->getDiagioi();
            $noidungtrang=$this->load->view('Quanly_diagioi',
                                            array('arr_Users1'=>$arr_Users2));
        }
    
    function sua_diagioi()
    {
        $data = array();
        $arr_Users2=$this->Modeldiagioi->getDiagioi();
        $id = $this->uri->segments[3];
        $id = intval($id);
        $info = $this->Modeldiagioi->get_info($id);   
        if($this->input->post())
        {
            $this->form_validation->set_rules('id_parent',"ID Parent",'required');
            $this->form_validation->set_rules('ten_diagioi',"Ten dia gioi",'required');
            
            if($this->form_validation->run())
            {
                $chon_id_parent = $this->input->post('id_parent'); 
                $tdg = $this->input->post('ten_diagioi');
                
                $dulieu = array('parent_id'=>$chon_id_parent,
                                'ten_diagioi'=>$tdg);
                                 
                $this->Modeldiagioi->suadiagioi($id,$dulieu);
                redirect(base_url('Diagioi_Controller/Quanly_diagioi'));
            }
        }
        $this->load->view('Sua_diagioi', array('arr_Users2' => $arr_Users2, 'info' => $info));
           
    }
    
    function them_diagioi()
    {
        $arr_Users2=$this->Modeldiagioi->getDiagioi();
        $data = array();
        if($this->input->post())
        {
            
            $this->form_validation->set_rules('id_parent',"ID Ðịa giới",'required');
            $this->form_validation->set_rules('diagioi',"Tên Ðịa giới",'required');
            
            if($this->form_validation->run())
            {
                $id_dg = $this->input->post('id_parent');
                $dg = $this->input->post('diagioi');
                
                $dulieu = array('parent_id'=>$id_dg,
                                'ten_diagioi'=>$dg);
                
                $this->Modeldiagioi->themdiagioi($dulieu);
                redirect(base_url().'Diagioi_Controller/quanly_diagioi');
            }
        }
        $this->load->view('Them_diagioi',array('arr_Users2'=>$arr_Users2));
    }
    
    function xoa_diagioi()
        {
            $id = $this->input->post('id');
            $result = $this->Modeldiagioi->xoadiagioi($id);
            echo json_encode($result);
        }
}