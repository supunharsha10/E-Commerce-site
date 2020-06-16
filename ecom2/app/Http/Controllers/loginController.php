<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\customer;
use App\admins;
use Validator;
use Auth;
use Session;
use DB;

class loginController extends Controller
{

    function checkCustomer(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        $customer = DB::table('customers')
                ->where('email', '=', $email)
                ->where('password', '=', $password)
                ->first();

        if (!$customer) 
        {
             return response()->json(['success'=>false, 'message' => 'Login Fail, invalid email or password']);
        }
        else
        {
             return view('/index');
        }
    }

    

    function checkAdmin(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        $admin = DB::table('admins')
                ->where('email', '=', $email)
                ->where('password', '=', $password)
                ->first();

        if (!$admin) 
        {
             return response()->json(['success'=>false, 'message' => 'Login Fail, invalid email or password']);
        }
        else
        {
             return view('/admin/index');
        }
    }

    public function logout() {

     Session::flush();
     Auth::logout();
     return Redirect('/adminlogin');
 }

    // function successlogin()
    // {
    //  return view('/index');
    // }

}
