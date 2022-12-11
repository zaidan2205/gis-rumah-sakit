<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rumkit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_rumkit');     
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Rumah Sakit Banyumas',
            'map'   => $this->googlemaps->create_map(),
            'rumkit'=> $this->m_rumkit->lists(),
            'isi'   => 'rumkit/v_lists'
         );
         $this->load->view('tampilan/v_wrapper', $data, FALSE);
    }

    public function input() {
        $this->user_login->cek_login();
        //Memunculkan Peta
        $config['center'] = '-7.4513728,109.2537174';
        $config['zoom'] = 11.9;
        $this->googlemaps->initialize ($config);
        //-----------------------
        $marker['position']='-7.4513728,109.2537174';
        $marker['draggable']=true;
        $marker['ondragend']='setToForm(event.latLng.lat(),event.latLng.lng())';
        $this->googlemaps->add_marker($marker);
        //-----------------------
        $this->form_validation->set_rules('nama_rumkit', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Rumah Sakit', 'required');
        $this->form_validation->set_rules('no_telpon', 'Nomor Telpon Rumah Sakit', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Rumah Sakit', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Rumah Sakit Banyumas',
                'map'   => $this->googlemaps->create_map(),
                'isi'   => 'rumkit/v_add'
             );
             $this->load->view('tampilan/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                            'nama_rumkit' => $this->input->post('nama_rumkit'),
                            'alamat' => $this->input->post('alamat'),
                            'no_telpon' => $this->input->post('no_telpon'),
                            'latitude' => $this->input->post('latitude'),
                            'longitude' => $this->input->post('longitude'),
                            'deskripsi' => $this->input->post('deskripsi'),
                        );
            $this->m_rumkit->input($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('rumkit');
        }
          
    }

    public function edit($id_rumkit) {
        $this->user_login->cek_login();
        //Memunculkan Peta
        $config['center'] = '-7.4513728,109.2537174';
        $config['zoom'] = 11.9;
        $this->googlemaps->initialize ($config);
        //-----------------------
        $marker['position']='-7.4513728,109.2537174';
        $marker['draggable']=true;
        $marker['ondragend']='setToForm(event.latLng.lat(),event.latLng.lng())';
        $this->googlemaps->add_marker($marker);
        //-----------------------
        $this->form_validation->set_rules('nama_rumkit', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Rumah Sakit', 'required');
        $this->form_validation->set_rules('no_telpon', 'Nomor Telpon Rumah Sakit', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Rumah Sakit', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Rumah Sakit Banyumas',
                'map'   => $this->googlemaps->create_map(),
                'rumkit'=>$this->m_rumkit->detail($id_rumkit),
                'isi'   => 'rumkit/v_edit'
             );
             $this->load->view('tampilan/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                            'id_rumkit' => $id_rumkit,
                            'nama_rumkit' => $this->input->post('nama_rumkit'),
                            'alamat' => $this->input->post('alamat'),
                            'no_telpon' => $this->input->post('no_telpon'),
                            'latitude' => $this->input->post('latitude'),
                            'longitude' => $this->input->post('longitude'),
                            'deskripsi' => $this->input->post('deskripsi'),
                        );
            $this->m_rumkit->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('rumkit');
        }   
        
    }

    public function delete($id_rumkit) {
        $this->user_login->cek_login();
        $data = array('id_rumkit' => $id_rumkit );
        $this->m_rumkit->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('rumkit');
    }

}

/* End of file Rumkit.php */
