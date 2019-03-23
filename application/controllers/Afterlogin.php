<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Afterlogin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($_SESSION['user_logged'] == FALSE) {

            $this->session->set_flashdata("Error","Vui lòng đăng nhập !!!");
            // redirect("Login_Controllers/login");
        }
    }
    public function abc()
        {
            $this->load->view('welcome_message');
        }
    }?>