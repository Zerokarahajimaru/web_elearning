<?php
namespace App\Models;

use CodeIgniter\Model;


class Data_Takes extends Model
{
    protected $table = 'takes';    // nama tabel
    protected $allowedFields = ['course_id_fk ', 'user_id']; // kolom yang boleh diisi
}
?>