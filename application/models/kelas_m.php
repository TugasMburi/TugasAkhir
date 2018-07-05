<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class kelas_m extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function get_kelas($limit, $start, $st = null)
        {
            if($st == "NIL") $st = "";
            $sql = "SELECT * FROM kelas WHERE nama_kelas LIKE '%$st%' LIMIT ".$start.", ".$limit;
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function get_kelas_count($st = NULL)
        {
            if($st == "NIL") $st = "";
            $sql = "SELECT * FROM kelas WHERE nama_kelas LIKE '%$st%'";
            $query = $this->db->query($sql);
            return $query->num_rows();
        }
        public function insert($data = [])
        {
            $result = $this->db->insert('kelas', $data);
            return $result; 
        }
        public function update($id, $data = [])
        {
            // TODO: set data yang akan di update
            // https://www.codeigniter.com/userguide3/database/query_builder.html#updating-data
    
            $this->db->where('id', $id);
            $this->db->update('kelas', $data);
            return result;
        }
        public function delete($id)
        {
            // TODO: tambahkan logic penghapusan data
            $this->db->where('id', $id);
            $this->db->delete('kelas');
        }
    }
?>