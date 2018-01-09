<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buah extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    }

    public function simpan($buah) {

    $this->db->query("insert into buah(nama_buah) values 
                                            ('$buah')");


    }



}
