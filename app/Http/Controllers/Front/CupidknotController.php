<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Hash;
use Auth;

class CupidknotController extends Controller{
    public function index(){
        return view('front.index');
    }
    public function signin(Request $request){
        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $user = User::where('email',$request->email)->first();
                if(!empty($user)){
                    return redirect('/profile');
                }
                else{
                    $request->session()->flash('alert-danger','Invalid Email And Password!!');
                    return redirect()->back();
                }  
            }
            else{
                $request->session()->flash('alert-danger','Invalid Email And Password!!');
                return redirect()->back();
            }
        }
        return view('front.signin');
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $check = User::where('email',$data['email'])->first();
            if($check){
                $request->session()->flash('alert-danger','User already exits!!');
                return redirect('/');
            }
            else{
                $user = new User;
                $user->name = $data['fname']." ".$data['lname'];
                $user->email = $data['email'];
                $user->password = Hash::make($data['password']);
                $dob=$data['dob'];
                $diff = (date('Y') - date('Y',strtotime($dob)));
                $user->dob = $diff;
                $user->gender = $data['gender'];
                $user->anual_incom = $data['anual_incom'];
                $user->occupation = $data['occupation'];
                $user->family_type = $data['family_type'];
                $user->manglik = $data['manglik'];
                $add = $user->save();
                if($add){
                    $credentials = $request->only('email', 'password');
                    if(Auth::attempt($credentials)){
                        return redirect('/profile');
                    }
                }
            }
        }
    }
    public function loginWithGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackFromGoogle(Request $request){
        try {
            $data = Socialite::driver('google')->stateless()->user();
            $this->createOrUpdateUser($data, 'google');
            return redirect('/profile');
        } 
        catch (\Throwable $th) {
            throw $th;
        }
    }
    public function createOrUpdateUser($data, $provider){
        $user = User::where('email', $data->email)->first();
        if($user){
            $user->update([
                'provider'=>$provider,
                'provider_id'=>$data->id,
                'avatar'=>$data->avatar
            ]);
        }
        else{
            $user=User::create([
                'name'=>$data->name,
                'email'=>$data->email,
                'provider'=>$provider,
                'provider_id'=>$data->id,
                'avatar'=>$data->avatar,
                'password' => Hash::make($data->name.''.$data->id)
            ]);
        }
    }
    public function profile(){
        $user = User::get()->toArray();
        return view('front.profile')->with(compact('user'));
    }
    public function userFilter(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if(!empty($data['fage'])){
                $user = User::where('age','<=',$data['fage'])->get()->toArray();
            }
            elseif(!empty($data['fincome'])){
                $user = User::where('anual_incom','<=',$data['fincome'])->get()->toArray();
            }
            elseif(!empty($data['fage']) AND !empty($data['fincome'])){
                $user = User::where(['age','<=',$data['fage'], 'anual_incom','<=',$data['fincome']])->get()->toArray();
            }
            else{
                $user = User::get()->toArray();
            }
        }
        else{
            $user = User::get()->toArray();
        }
        return view('front.filter-profile')->with(compact('user'));
    }
}
