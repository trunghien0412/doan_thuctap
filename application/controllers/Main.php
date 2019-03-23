<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
    function __construct()
        {
            parent::__construct();
            $this->load->model('modeluser');
            $this->load->model('Modelbieumau');
        }
        
    function index()
        {
            $this->load->view('Home');
        }

    function taobieumau()
        {
              $this->load->view('Taobieumau');
        }
        
    function bieumau()
    {
        /*if($this->input->post())
        {
            
            $this->form_validation->set_rules('tieude',"Tieu de",'required');
            $this->form_validation->set_rules('mota',"Mo ta",'required');
            
            if($this->form_validation->run())
            {
                
                $tieude = $this->input->post('tieude');
                $mota = $this->input->post('mota');
                
                for($i=1;$i<$biendem+1;$i++)
                {
                    $cauhoi = $this->input->post('cauhoi_'+$i);
                    $ip = $this->input->post('demoSelect_'+$i);
                    $dapan = $this->input->post('dapan_'+$i);
                    $dapan_more = $this->input->post('tuychon_'+$i);
                }
                
                $dulieu = array('ten_bm'=>$tieude,
                                'mota'=>$mota);
                
                $this->Modelbieumau->thembieumau($dulieu);
                
            }
        }*/
        $arr_Users3=$this->modeluser->getDonvi();
        if($this->input->post())
        {
            $this->form_validation->set_rules('tieude',"Tieu de",'required');

            $this->form_validation->set_rules('mota',"Mo ta",'required');
                
            $json_attrs = $this->input->post('attrs');

            $json_attrs = json_encode($json_attrs, 1);

            if($this->form_validation->run())
                {
                    $tieude = $this->input->post('tieude');

                    $mota = $this->input->post('mota');

                    $dulieu = array('ten_bm'=>$tieude,
                                    'mota'=>$mota, 'attributes' => $json_attrs);

                    $this->Modelbieumau->thembieumau($dulieu);
                }
        }
        $this->load->view('Bieumau',array('arr_Users3' => $arr_Users3));
    }

    public function tra_loi($id)
    {

        $bieu_mau = $this->Modelbieumau->getById($id);
        $this->load->view('tra_loi_bm',
                         ['bieu_mau' => $bieu_mau]);

    }
}  