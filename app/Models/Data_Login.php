<?php
namespace App\Models;

use CodeIgniter\Model;

class Data_Login extends Model{
    protected $table = "user";
    protected $primaryKey = 'id_users';
    protected $allowedFields = ['nama', 'password','role'];
}
?>