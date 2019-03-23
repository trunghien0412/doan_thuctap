<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Donvi_Controller extends CI_Controller {

    function __construct()
	    {
		    parent::__construct();
            $this->load->model('modeldonvi');
            $this->load->model('modeldiagioi');
        }
    function list_donvi()
        {
            $arr_Users2=$this->modeldonvi->getDonvi();
            $noidungtrang=$this->load->view('Quanly_donvi',
                                            array('arr_Users1'=>$arr_Users2),
                                            true);
            echo $noidungtrang;
        }
    
    function sua_donvi()
    {
        $data = array();
        $arr_Users2=$this->modeldonvi->getDonvi();
        $id = $this->uri->segments[3];
        $id = intval($id);
        $info = $this->modeldonvi->get_info($id);   
        if($this->input->post())
        {
            $this->form_validation->set_rules('id_parent',"ID cấp",'required');
            $this->form_validation->set_rules('tendonvi',"Tên Đơn vị",'required');
            $this->form_validation->set_rules('diachi',"Địa chỉ",'required');
            $this->form_validation->set_rules('email',"Email",'required');
            $this->form_validation->set_rules('sdt',"SDT",'required');
            
            if($this->form_validation->run())
            {
                $id_cap = $this->input->post('id_parent');
                $tendv = $this->input->post('tendonvi');
                $diachi = $this->input->post('diachi');
                $em = $this->input->post('email');
                $sdt = $this->input->post('sdt');
                
                $dulieu = array('id_parent'=>$id_cap,
                                'tendv'=>$tendv,
                                'diachi'=>$diachi,
                                'email'=>$em,
                                'sdt'=>$sdt);
                                 
                $this->modeldonvi->suadonvi($id,$dulieu);
                redirect(base_url().'Donvi_Controller/list_donvi');
            }
        }
        $this->load->view('Sua_donvi', array('arr_Users2' => $arr_Users2, 'info' => $info));    
    }
    
    function them_donvi()
    {
        $arr_Users2=$this->modeldonvi->getDonvi();
        $arr_Users3=$this->modeldiagioi->getDiagioi();
        $data = array();
        if($this->input->post())
        {
            
            $this->form_validation->set_rules('id_parent',"ID cấp",'required');
            $this->form_validation->set_rules('tendonvi',"Tên Đơn vị",'required');
            $this->form_validation->set_rules('diachi',"Địa chỉ",'required');
            $this->form_validation->set_rules('email',"Email",'required');
            $this->form_validation->set_rules('sdt',"SDT",'required|numeric');
            
            if($this->form_validation->run())
            {
                $id_cap = $this->input->post('id_parent');
                $tendv = $this->input->post('tendonvi');
                $diachi = $this->input->post('diachi');
                $em = $this->input->post('email');
                $sdt = $this->input->post('sdt');
                
                $dulieu = array('id_parent'=>$id_cap,
                                'tendv'=>$tendv,
                                'diachi'=>$diachi,
                                'email'=>$em,
                                'sdt'=>$sdt);
                
                $this->modeldonvi->themdonvi($dulieu);
                redirect(base_url().'Donvi_Controller/list_donvi');
            }
        }
        $this->load->view('Them_donvi',array('arr_Users2'=>$arr_Users2,'arr_Users3'=>$arr_Users3));
    }
    
    function xoa_donvi()
        {
            $id = $this->input->post('id');
            $result = $this->modeldonvi->xoadonvi($id);
            echo json_encode($result);
        }
}