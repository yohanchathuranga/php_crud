<?php
class View_model extends CI_Model {

    public function __construct()
        {
                $this->load->database();
        }

    public function customtrips()
    {       
        $q1 = $this->db->query("SELECT * FROM customtrips");
        $this->db->close();
        return $q1;
    }

}