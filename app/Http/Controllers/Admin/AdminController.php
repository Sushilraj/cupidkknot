<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $admin = Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']]);
            if($admin){
                return redirect('admin/dashboard');
            }
            else{
                $request->session()->flash('alert-danger','Invalid Email And Password!!');
                return redirect()->back();
            }
        }
        else{
            return view('admin.index');
        }
    }
    public function dashboard(){
        $user = User::get()->toArray();
        return view('admin.dashboard')->with(compact('user'));
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
    public function userFilterByAge(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data){
                $user = User::where('age',$data['age'])->get()->toArray();
                if(empty($user)){
                    $user = User::get()->toArray();
                }
            }
            else{
                $user = User::get()->toArray();
            }
            return view('admin.append_filter_user')->with(compact('user'));
        }
    }
    public function userFilterByIncome(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if(!empty($data)){
                $user = User::where('anual_incom',$data['income'])->get()->toArray();
                if(empty($user)){
                    $user = User::get()->toArray();
                } 
            }
            else{
                $user = User::get()->toArray();
            }
            return view('admin.append_filter_user')->with(compact('user'));
        }
    }
}
