<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_rumkit');
        
    }
    

    public function index()
    {
        $config['center'] = '-7.4513728,109.2537174';
        $config['zoom'] = 11;
        $this->googlemaps->initialize ($config);
        //-------pemetaan-------
        $rumkit=$this->m_rumkit->lists();
        foreach ($rumkit as $key => $value) {
            $marker=array();
            $marker['position']="$value->latitude,$value->longitude";
            $marker['animation']="BOUNCE";
            $marker['infowindow_content'] ='<div class="media" style="width:250px;">';
            $marker['infowindow_content'] .='<div class="media-body">';
            $marker['infowindow_content'] .='<h5>'.$value->nama_rumkit. '</h5>';
            $marker['infowindow_content'] .='<p> Telp ('.$value->no_telpon. ')</p>';
            $marker['infowindow_content'] .='<p>'.$value->alamat. '</p>';
            $marker['infowindow_content'] .='<p>'.$value->deskripsi. '</p>';
            $marker['infowindow_content'] .='</div>';
            $marker['infowindow_content'] .='</div>';

            $this->googlemaps->add_marker($marker);
        }
        //-------end pemetaan----
        $data = array(
                       'title' => 'Pemetaan Rumah Sakit Banyumas',
                       'map'   => $this->googlemaps->create_map(),
                       'isi'   => 'v_home'
                    );
        $this->load->view('tampilan/v_wrapper', $data, FALSE);
    }

}

/* End of file Home.php */

