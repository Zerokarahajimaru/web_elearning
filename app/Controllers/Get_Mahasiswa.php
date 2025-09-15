<?php
namespace App\Controllers;

use App\Models\DataMahasiswa;
use App\Models\LoginDB;

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

    public function getadmindashboard(){
        return view('Page_Admin_Dashboard');
    }


}



?>