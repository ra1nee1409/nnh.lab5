<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nnhAccountController extends Controller
{
    public function nnhlogin(){
        return view('nnh-login');
    }
    public function nnhloginsubmit(request $request){
        $valivationdata = $request->validate([
            'nnh-email'=>'required|regex:/[a-zA-Z0-9.*%±]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}/',
            'nnh-password'=>'required|min:6'
        ]);
        $data = $request->all();
        $email = $data['nnh-email'];
        $password = $data['nnh-password'];

        $nnhLoginSession = [
            'nnh-email' => $email,
            'nnh-password' => $password
        ];
        $nnh_json = json_encode($nnhLoginSession);
        if($email == "nnh@gmail.com" && $password == "123456"){
            $request -> session()->put('K23CNT1_NguyeNgocHieu', $email, $password);
            return redirect('/');
        }
        return redirect()->back()-> with('nnh   -error', 'Lỗi đăng nhập');

    }
}
