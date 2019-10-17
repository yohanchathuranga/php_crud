
<?php
    class insert_model extends CI_Model{
        function __construct() {
        parent::__construct();
    }
    public function customtrips($data){
        // Inserting in Table(customtrips) of Database(ud_city_tours)
        $this->db->insert('customtrips', $data);
    }
 }
?>