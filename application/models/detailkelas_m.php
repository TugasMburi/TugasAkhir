<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class detailkelas_m extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function get_detailkelas($limit, $start, $st = null)
        {
            if($st == "NIL") $st = "";
            $sql = "SELECT m.id, m.nim, m.nama, m.alamat, k.nama_kelas, k.tingkat FROM mahasiswa as m INNER JOIN detail_mahasiswa_kelas d on m.id = d.id_mahasiswa INNER JOIN kelas k on d.id_kelas = k.id WHERE m.nama LIKE '%$st%' ORDER BY m.nama ASC LIMIT ".$start.", ".$limit;
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function get_detailkelas_count($st = NULL)
        {
            if($st == "NIL") $st = "";
            $sql = "SELECT m.id, m.nim, m.nama, m.alamat, k.nama_kelas, k.tingkat FROM mahasiswa as m INNER JOIN detail_mahasiswa_kelas d on m.id = d.id_mahasiswa INNER JOIN kelas k on d.id_kelas = k.id WHERE m.nama LIKE '%$st%'";
            $query = $this->db->query($sql);
            return $query->num_rows();
        }
    }