<?php
namespace App\Controllers;

use App\Models\DataMahasiswa;

class GetMhs extends BaseController
{
    public function landingPage(){
        return view('dashboard');
    }

    public function getallmahasiswa(){
        $model = new DataMahasiswa();
        $data['mhs'] = $model->findAll();

        return view('mahasiswaList',$data);
    }

    public function getmhsspecificnim($nim_parameter){
        $model = new DataMahasiswa;
        $data['nim'] = $model->where('id_mhs',$nim_parameter)->first();
        return view('mahasiswa_detail',$data);
    }
}

?>