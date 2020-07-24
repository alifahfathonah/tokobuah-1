<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $id_karyawan;
    public $nama_karyawan;
    public $alamat_karyawan;
    public $telpon_karyawan;
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }  
}