<?php
class insert_ctrl extends CI_Controller {
    function __construct() {
    parent::__construct();
    $this->load->model('insert_model');
}
public function index() {
    //Including validation library
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    //Validating Date Field
    $this->form_validation->set_rules('date', 'Date', 'required');
    //Validating pickup time Field
    $this->form_validation->set_rules('pickup_time', 'Pickup Time', 'required');
    //Validating Day count Field
    $this->form_validation->set_rules('day_count', 'No of Days', 'required');
    //Validating pickup point Field
    $this->form_validation->set_rules('pickup_point', 'Pickup Point', 'required');
    //Validating destination Field
    $this->form_validation->set_rules('destination', 'Destination', 'required');
     //Validating estimated distance Field
    $this->form_validation->set_rules('est_distance', 'Estimated Distance', 'required');

    if ($this->form_validation->run() == FALSE) {
         $this->load->view('page/insert_view');
    } else {
    //Setting values for tabel columns
        $data = array(
        'Date' => $this->input->post('date'),
        'Pickup_Time' => $this->input->post('pickup_time'),
        'Day_Count' => $this->input->post('day_count'),
        'Pickup_point' => $this->input->post('pickup_point'),
        'Destination' => $this->input->post('destination'),
        'Est_Distance' => $this->input->post('est_distance')
        );
        //Transfering data to Model
        $this->insert_model->customtrips($data);
        $data['message'] = 'Data Inserted Successfully';

        $this->load->view('page/insert_view', $data);
        }
    }
}
?>