<?php
namespace App\Controllers;

use App\Models\Data_Courses;
use App\Models\Data_Mahasiswa;
use App\Models\Data_Takes;


class Get_Mahasiswa extends BaseController
{
    public function loginForm(): string{
        return view('Page_Login_Form');
    }

    public function getDashboard(){
        return view('Page_Mahasiswa_Dashboard');
    }

    public function getallmahasiswa(){
        $model = new Data_Mahasiswa();
        $data['mhs'] = $model->findAll();

        return view('Page_Mahasiswa_List',$data);
    }

    public function getmhsspecificnim($nim_parameter){
        $model = new Data_Mahasiswa;
        $data['nim'] = $model->where('id_mhs',$nim_parameter)->first();
        return view('Page_Mahasiswa_Detail',$data);
    }

//saat beres ini harus diteliti soalnya aku masih kurang paham
    public function getadmindashboard(){
        $dataDB1 =new Data_Courses;
        $dataDB2 = new Data_Takes;
        $data1['course'] = $dataDB1->findAll();
            $data2['takes_plus_mahasiswa'] = $dataDB2
        ->select('takes.*, user.nama')   // semua atribut takes + hanya nama dari user
        ->join('user', 'user.id_users = takes.user_id')
        ->findAll();

        return view('Page_Admin_Dashboard',['course' => $data1['course'] ,'takes' => $data2['takes_plus_mahasiswa'] ]);
    }


    public function mahasiswaCourse(){
        $dataDB= new Data_Courses;
        $data['course_mahasiswa'] = $dataDB->findAll();
        return view('Page_Mahasiswa_Course',$data);
    }

    public function getSpecificCourse($name_course){
        $dataDB = new Data_Courses;
        $data['course_spesific'] = $dataDB->select('course_name')->where('course_name',$name_course)->first();
        return view('Page_Mahasiswa_Specific_Course',$data);
    }
}

?>