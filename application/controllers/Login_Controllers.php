<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Controllers extends CI_Controller {
    
        function __construct()
	    {
		    parent::__construct();
		    $this->load->model('modelnguoiquantri');
            $this->load->model('modeluser');
        }

        function dangky()
        {
            $data = array();
            if($this->input->post())
            {
                $this->form_validation->set_rules('user',"Tên tài khoản",'required');
                $this->form_validation->set_rules('displayname',"Tên hiển thị",'required');
                $this->form_validation->set_rules('pass',"Mật khẩu",'required');
                $this->form_validation->set_rules('email',"Email",'required');
                $this->form_validation->set_rules('address',"Địa chỉ",'required');
                $this->form_validation->set_rules('donvi',"Đơn vị",'required');
                
                if($this->form_validation->run())
                {
                    $taikhoan = $this->input->post('user');
                    $matkhau = $this->input->post('pass');
                    $tenht = $this->input->post('displayname');
                    $email = $this->input->post('email');
                    $diachi = $this->input->post('address');
                    $donvi = $this->input->post('donvi');
                    
                    $dulieu = array('display_name'=>$tenht,
                                    'username'=>$taikhoan,
                                    'password'=>md5($matkhau),
                                    'email'=>$email,
                                    'address'=>$diachi,
                                    'donvi'=>$donvi);
                                    
                    $this->modeluser->themuser($dulieu);  
                    redirect(base_url('Quantri_Controllers/quanly_nguoidung'));
                }
            }
            $this->load->view('Dangky');
        }

        function dangnhap()
        {
            $data = array();			
            if($this->input->post())
            {
                $this->form_validation->set_rules('Dangnhap','login','callback_check_login');	
                if($this->form_validation->run())
                {
                    $taikhoan = $this->input->post('user');
                    $this->session->set_userdata('dangnhap',$taikhoan);
                    redirect(base_url('Quantri_Controllers/quanly_nguoidung'));
                }		
            }
            $this->load->view('Dangnhap',$data);
        } 

        function check_login()
        {
            $taikhoan = $this->input->post('username');
            $matkhau = $this->input->post('password');
            $where = array('username'=>$taikhoan,'password'=>md5($matkhau));
            if($this->modelnguoiquantri->check_exists($where))
            {
                return true;
            }
            else
            {
                // tao 1 message thong bao dang nhap ko thanh cong
                $this->form_validation->set_message(__FUNCTION__,'Đăng nhập không thành công');
                return false;
            }
        }

             
} 