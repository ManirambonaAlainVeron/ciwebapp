<?php 
    class Home extends CI_controller{
        public function index(){
            $this->load->view('admin/dashboard');
        }
    }
?>