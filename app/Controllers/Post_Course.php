<?php
namespace App\Controllers;

use App\Models\Data_Courses;
use App\Models\Data_Login;
use App\Models\Data_Mahasiswa;
use App\Models\Data_Takes;
use Illuminate\Http\Request;

class Post_Course extends BaseController{

    public function returnPostDataCredits(){
        $mhs_enroll_code=$this->request->getPost('enroll_code_from_mahasiswa');        
        return $mhs_enroll_code;
    }


    public function convert_course_name_to_credits($matkulname){
        $dataDB= new Data_Courses;
        $data = $dataDB->select('course_name,credits,course_id')->where('course_name',$matkulname)->first();
        return $data;
    }

    public function compare_course_credits($matkulname){
        
        $dataDB1 = new Data_Takes;


        $credits=$this->convert_course_name_to_credits($matkulname);
        $mhs_enroll_code = $this->returnPostDataCredits();

        $nama_dari_session = session()->get('user_id');
        
        if($mhs_enroll_code == $credits['credits']){
            //query masukin ke database
            $data = [
                'course_id_fk' => $credits['course_id'],
                'user_id' => $nama_dari_session
            ];
            $dataDB1->insert($data);

            session()->setFlashdata('berhasil_enroll', 'Login Berhasil');
            return redirect()->to(base_url('dashboard_mahasiswa/course/').$matkulname);
        }else{
            session()->setFlashdata('error_enroll', 'Login gagal, coba lagi!');
            return redirect()->to(base_url('dashboard_mahasiswa/course/').$matkulname);
        }
    }  

}


