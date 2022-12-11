<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_user'); 

        
    }

    public function index()
    {
        $this->user_login->cek_login();
        $data = array(
            'title' => 'Data User',
            'map'   => $this->googlemaps->create_map(),
            'user'=> $this->m_user->lists(),
            'isi'   => 'user/v_lists'
         );
         $this->load->view('tampilan/v_wrapper', $data, FALSE);
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->user_login->login($username,$password);
        }
        
        $data = array(
            'title' => 'Login',
            'map'   => $this->googlemaps->create_map(),
            'isi'   => 'v_login'
         );
         $this->load->view('tampilan/v_wrapper', $data, FALSE);
    }

    public function logout() {
        $this->user_login->logout();
    }

}

/* End of file User.php */
