<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Quantri_Controllers extends CI_Controller {

    function __construct()
	    {
		    parent::__construct();
            $this->load->model('modeluser');
        }
    function quanly_nguoidung()
        {
            $arr_Users2=$this->modeluser->getList();
            $this->load->view('QuanLY_nguoidung',
                                            array('arr_Users1'=>$arr_Users2));
        }
    
    function sua_nguoidung()
    {
        $arr_Users1=$this->modeluser->getDiagioi();
        $arr_Users2=$this->modeluser->getList();
        $arr_Users3=$this->modeluser->getDonvi();
        $data = array();
        $id = $this->uri->segments[3];
        $id = intval($id);
        $info = $this->modeluser->get_info($id);   
        if($this->input->post())
        {
            $this->form_validation->set_rules('user',"tên user",'required');
            $this->form_validation->set_rules('displayname',"tên hi?n th?",'required');
            $this->form_validation->set_rules('pass',"password",'required');
            $this->form_validation->set_rules('email',"email",'required|valid_email');
            $this->form_validation->set_rules('passmoi',"cpassword",'required');
            $this->form_validation->set_rules('c_passmoi',"cpassword mới",'required|matches[passmoi]');
            $this->form_validation->set_rules('address',"địa chỉ",'required');
            $this->form_validation->set_rules('donvi',"đơn vị",'required');
            
            if($this->form_validation->run())
            {
                $tenuser = $this->input->post('user');
                $tenht = $this->input->post('displayname');
                $pw = $this->input->post('passmoi');
                $cpass = $this->input->post('c_passmoi');
                $em = $this->input->post('email');
                $diachi = $this->input->post('address');
                $donvi = $this->input->post('donvi');
                
                $dulieu = array('username'=>$tenuser,
                                'display_name'=>$tenht,
                                'password'=>md5($pw),
                                'confirm_password'=>md5($cpass),
                                'email'=>$em,
                                'address'=>$diachi,
                                'donvi'=>$donvi);
                                 
                $this->modeluser->suauser($id,$dulieu);
                redirect(base_url().'Quantri_Controllers/quanly_nguoidung');
            }
        }
        $this->load->view('Sua_nguoidung', array('info' => $info,'arr_Users1' => $arr_Users1,'arr_Users2' => $arr_Users2,'arr_Users3' => $arr_Users3, 'info' => $info));    
    }
    
    function them_nguoidung()
    {
        $arr_Users1=$this->modeluser->getDiagioi();
        $arr_Users2=$this->modeluser->getList();
        $arr_Users3=$this->modeluser->getDonvi();
        $data = array();
        if($this->input->post())
        {
            
            $this->form_validation->set_rules('user',"tên user",'required');
            $this->form_validation->set_rules('displayname',"tên hiển thị",'required');
            $this->form_validation->set_rules('pass',"password",'required');
            $this->form_validation->set_rules('c_pass',"cpassword",'required');
            $this->form_validation->set_rules('email',"email",'required|valid_email');
            $this->form_validation->set_rules('address',"địa chỉ",'required');
            $this->form_validation->set_rules('donvi',"đơn vị",'required');
            
            if($this->form_validation->run())
            {
                $tenuser = $this->input->post('user');
                $tenht = $this->input->post('displayname');
                $pw = $this->input->post('pass');
                $cpass = $this->input->post('c_pass');
                $em = $this->input->post('email');
                $diachi = $this->input->post('address');
                $donvi = $this->input->post('donvi');
                
                $dulieu = array('username'=>$tenuser,
                                'display_name'=>$tenht,
                                'password'=>md5($pw),
                                'confirm_password'=>md5($cpass),
                                'email'=>$em,
                                'address'=>$diachi,
                                'donvi'=>$donvi);
                
                $this->modeluser->themuser($dulieu);
                redirect(base_url().'Quantri_Controllers/quanly_nguoidung');
            }
        }
        $this->load->view('Dangky',array('arr_Users1'=>$arr_Users1,'arr_Users2'=>$arr_Users2,'arr_Users3'=>$arr_Users3));
    }
    
    function xoa_nguoidung()
        {
            $id = $this->input->post('id');
            $result = $this->modeluser->xoauser($id);
            echo json_encode($result);
        }
}