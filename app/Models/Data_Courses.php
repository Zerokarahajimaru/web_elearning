<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_Courses extends Model{
    protected $table = "courses";
    protected $allowedFields = ['course_name','credits','course_id'];
}
?>