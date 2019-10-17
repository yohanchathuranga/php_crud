<?php
    class delete_model extends CI_Model{
    // Function to select all from table name customtrips.
        public function trip(){
            $query = $this->db->get('customtrips');
            $query_result = $query->result();
            return $query_result;
        }
        // Function to select particular record from table name customtrips.
        public function trip_id($data){
            $this->db->select('*');
            $this->db->from('customtrips');
            $this->db->where('Trip_ID', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
        // Function to Delete selected record from table name customtrips.
        public function delete_trip_id($id){
            $this->db->where('Trip_ID', $id);
            $this->db->delete('customtrips');
        }
    }
?> 