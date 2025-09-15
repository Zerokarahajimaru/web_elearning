<?php
namespace App\Models;

use CodeIgniter\Model;


class Data_Mahasiswa extends Model
{
    protected $table = 'mahasiswa';    // nama tabel
    protected $primaryKey = 'id_mhs';
    protected $allowedFields = ['id_mhs', 'name']; // kolom yang boleh diisi
}
?>