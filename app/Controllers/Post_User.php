<?php
namespace App\Controllers;

use App\Models\Data_Login;
use App\Models\Data_Mahasiswa;
use Illuminate\Http\Request;

class Post_User extends BaseController{

        public function save_data()
    {   $button_login =[
        'username_html' =>  $this->request->getPost("id_mhs"),
        'password_html' =>  $this->request->getPost("password")
    ];
    // echo $button_login['username_html'];
    // echo $button_login['password_html'];
        return $button_login;
    }

    public function compare()
    {   
        $status = false;
        $data = new Data_Login();
        $button_login = $this->save_data();
        //bikin key baru bernama login
        $form = $data->select('nama, password,role')
             ->where('nama', $button_login['username_html'])
             ->where('password', $button_login['password_html'])
             ->first();
        //cek apakah ada username
        if(isset($form['nama']) && isset($form['password'])){
            echo $form['nama'] . $form['password'] ;
            return $this->get_page_based_role($this->return_status_role($form['role']));
        }else{
            echo'tidak ada username';
            // return view('Page_Mahasiswa_Dashboard');
            return redirect()->to(base_url('/'));
        }    
    }

    public function return_status_role($role){
        if($role == 'pelajar')return 1;
        else 
        if($role == 'admin') return 2;
        else return 0;//nanti aku mau ngecrashin kalo unautorize :)
    }

    public function get_page_based_role($role_status_return){
        switch ($role_status_return) {
            case 1:
                // return view('Page_Mahasiswa_Dashboard');
                return redirect()->to(base_url('dashboard_mahasiswa'));
                break;
            case 2:
                // return view('Page_Admin_Dashboard');
                return redirect()->to(base_url('dashboard_admin'));
                break;
            default:
                // return view('Page_Mahasiswa_Dashboard');
                return redirect()->to(base_url('/'));
                break;
        }
    }

    /*
    status 1 == mahasiswa
    status 2 == admin
    status 0 == root
    */

    // public function mengirimPassword(){
    //     $user = new Data_Login();
    //     //mencari username dan password apakah sudah benar:
    //     $data['user'] = $model->where('username,password',$suatUsername,$suatuPass);
    //     //kasih tau kaloo false maka tidak di kasih router
    //     //kalo mhs
    //     if(true){
    //         return view('dashboard');
    //     }else
    //         if(){//kalo admin

    //         }else{//kalo gagal maka tetep di root
                
    //         }
        
    //     return 
    // }






    /* 
        public function compare() // :boolean
    {
        $status = false;
        $data = new Data_Login();
        $button_login = save_data();
        $data_login['login'] = $data->select('username','password','role')->where('username',$button_login['username_html'])->where('password',$button_login['password_html'])->findFirst();
        foreach($data_login['login'] as $row ){
            if($row['username'] == $button_login['username_html'] && $row['password'] == $button_login['password_html'] ) 
                get_page_based_role(return_status_role($login['role']));
        }
            return view('/');
    }

    */
}
?>