<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bieumau_Controller extends CI_Controller {
    function __construct()
	    {
		    parent::__construct();
            $this->load->model('Modelbieumau');
        }
    
}