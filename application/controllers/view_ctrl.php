<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class View_ctrl extends CI_Controller {

        public function view()
        {
            $this->load->model('view_model');
            $data['t'] = $this->view_model->customtrips();
            $this->load->view('page/view_view',$data);
            
        }
    }
?>