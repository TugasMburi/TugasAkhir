<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class mahasiswa_m extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        public function get_mahasiswa($limit, $start, $st = NULL)
        {
            if($st == "NIL") $st = "";
            $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$st%' LIMIT ".$start.", ".$limit;
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function get_mahasiswa_count($st = NULL)
        {
            if($st == "NIL") $st = "";
            $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$st%'";
            $query = $this->db->query($sql);
            return $query->num_rows();
        }
        public function show($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa'); 
        $this->db->join('kelas', 'mahasiswa.id=kelas.id');
        $this->db->where('id',$id);     
        $query = $this->db->get();
        return $query->row();
    }

    public function update($id, $data = [])
    {
        // TODO: set data yang akan di update
        // https://www.codeigniter.com/userguide3/database/query_builder.html#updating-data

        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
        return result;
    }
    
    public function delete($id)
    {
        // TODO: tambahkan logic penghapusan data
        $this->db->where('id', $id);

        $this->db->delete('mahasiswa');
    }
    }
?>