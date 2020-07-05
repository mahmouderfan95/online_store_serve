<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\loginValidation;
use Auth;
class loginController extends Controller
{
    public function getLogin(){
    	return view('admin.login');
    }
    public function postLogin(loginValidation $request){
    	// $remember_me = $request->has('remember_me') ? true : false;
        // $attmp = $request->only('email','password');
        $email = request('email');
        $pass = bcrypt(request('password'));
    	if(! Auth::guard("admin")->attempt(['email'=> $email,'password'=>$pass])){
            return redirect()->back()->with(['errorMsg'=>'There is an error in the data']);
    	}else{
            return redirect()->route('admin.dashbord');

    	}


    }
}
