<?php
    class update_model extends CI_Model{
        // Function To Fetch All trip Record
        public function show_trips(){
            $query = $this->db->get('customtrips');
            $query_result = $query->result();
            return $query_result;
        }
        //  function To Fetch Selected trip Record
        public function show_trip_id($data){
            $this->db->select('*');
            $this->db->from('customtrips');
            $this->db->where('Trip_ID', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
        // Update Query For Selected trip
            public function update_trip_id1($id,$data){
            $this->db->where('Trip_ID', $id);
            $this->db->update('customtrips', $data);
        }
    }
?>