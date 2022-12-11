<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function lists() {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result();
        
    }
    
    public function login($username,$password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where(array(
                                'username'=>$username,
                                'password'=>$password,
                            ));
                            return $this->db->get()->row();                     
        
    }

}

/* End of file M_user.php */
