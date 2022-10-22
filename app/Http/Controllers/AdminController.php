<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function signUp(){
        $adminUser = new Admin;
        $adminUser->name = "admin";
        $adminUser->email = "admin@gmail.com";
        $adminUser->password = Hash::make('1199');
        $adminUser->save();
        echo "okay";
    }


    public function adminLoginPost(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');
        $adminUser = Admin::where('email', '=', $email)->first();
        if($adminUser->email == $email and Hash::check($password, $adminUser->password)){
            session()->put('id', $adminUser->id);
            session()->put('name', $adminUser->name);
            session()->put('email', $adminUser->email);
            session()->put('created_at', $adminUser->created_at);
            return redirect()->route('adminDashboard');
        }else{
            $request->session()->flash('admin-login', 'msg');
            return redirect()->route('adminLogin')->withInput();
        }
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout(){
        session()->forget([
            'id',
            'name',
            'email',
            'created_at',
        ]);
        return redirect()->route('adminLogin');
    }
}
