<?php
namespace App\Models;

use CodeIgniter\Model;

class LoginDB extends Model{
    protected $table = "mahasiswa";
    protected $primaryKey = 'id_mhs';
    protected $allowedFields = ['id_mhs', 'password'];
}
?>