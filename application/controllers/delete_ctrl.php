<?php
    class delete_ctrl extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('delete_model');
        }
        // Function to Fetch selected record from database.
        public function trip_id() {
            $id = $this->uri->segment(3);
            $data['customtrips'] = $this->delete_model->trip();
            $data['single_customtrip'] = $this->delete_model->trip_id($id);
            $this->load->view('page/delete_view', $data);
        }
        // Function to Delete selected record from database.
        function delete_trip_id() {
            $id = $this->uri->segment(3);
            $this->delete_model->delete_trip_id($id);
            $this->trip_id();
        }
    }
?>