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
        // dd($request->all());
        $attmp = $request->only('email','password');
        if(! Auth::guard('admin')->attempt($attmp)){
            dd('error');
        }
        return redirect()->route('admin.dashbord');

        // return redirect()->back()->with(['errorMsg'=>'There is an error in the data']);
    	// $remember_me = $request->has('remember_me') ? true : false;

    }
    /* logout function */
    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('get_admin_Login');
    }
    /* logout function */
}
