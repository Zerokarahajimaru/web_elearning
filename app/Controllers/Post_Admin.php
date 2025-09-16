<?php
namespace App\Controllers;

use App\Models\Data_Courses;
use App\Models\Data_Mahasiswa;
use App\Models\Data_Takes;


class Post_Admin extends BaseController
{
    public function get_post_value()
    {
    $checkbox_delete = $this->request->getPost("input_value"); 
    

        return $checkbox_delete;
    }
    

 public function compare_delete()
{
    $dataDB1 = new Data_Takes;

    // Ambil array user_id dari checkbox
    $index_user_id = $this->get_post_value();

    if ($index_user_id) {
        // Hapus semua row di Data_Takes yang user_id ada dalam array
        $dataDB1->whereIn('user_id', $index_user_id)->delete();
    }

    return redirect()->to(base_url('dashboard_admin'));
}



}



?>