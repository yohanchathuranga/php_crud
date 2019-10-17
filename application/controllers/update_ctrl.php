<?php
    class update_ctrl extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('update_model');
        }
        public function trip_id() {
            $id = $this->uri->segment(3);
            $data['customtrips'] = $this->update_model->show_trips();
            $data['single_customtrip'] = $this->update_model->show_trip_id($id);
            $this->load->view('page/update_view', $data);
        }
        public function update_trip_id1() {
            $id= $this->input->post('tid');
            $data = array(
            'Date' => $this->input->post('date'),
            'Pickup_Time' => $this->input->post('pickup_time'),
            'Day_Count' => $this->input->post('day_count'),
            'Pickup_point' => $this->input->post('pickup_point'),
            'Destination' => $this->input->post('destination'),
            'Est_Distance' => $this->input->post('est_distance')
            );
            $this->update_model->update_trip_id1($id,$data);
            $this->trip_id();
        }
    }
?>