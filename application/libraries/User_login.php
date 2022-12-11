<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_user');
    }

    public function login($username,$password) {
        $cek = $this->ci->m_user->login($username,$password);
        if ($cek) {
            $username=$cek->username;
            $nama_user=$cek->nama_user;
            
            $this->ci->session->set_userdata( 'username',$username );
            $this->ci->session->set_userdata( 'nama_user',$nama_user );
            redirect('home');
        }else {
            $this->ci->session->set_flashdata('pesan', 'Username atau Passowrd Tidak Cocok'); 
            redirect('user/login');
        }
    }

    public function cek_login() {
        if ($this->ci->session->userdata('username')=="") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login, Silahkan Login Dulu');
            redirect('user/login');
        }
    }

    public function logout() {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('password');
        $this->ci->session->set_flashdata('pesan', 'Logut Sukses');
        redirect('user/login');
         
    }

}

/* End of file User_login.php */
