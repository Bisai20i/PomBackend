<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordReset;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    public function index(){
        return view('layout.loginpage');
    }

    public function resetpassword(Request $req){
        $req->validate(['token'=>'required|size:5']);

        if(session()->has('resetToken') && session()->has('tokenTime')){
            $expired = now()->diffInMinutes(session('tokenTime')) >= 3;
            if($expired){
                return $req->token;
                session()->forget(['resetToken', 'tokenTime', 'userid']);
                return redirect()->route('forgetpassword')->with('message','Token Expired!')->with('status','Alert');
            }
            if($req->token == session('resetToken')){
                return redirect()->route('resetpassword');
            }else{
                return redirect()->back()->with('message','Invalid Token.')->with('status','Alert');
            }
        }
    }

    public function updatepassword(Request $req){
        if(!session()->has('resetToken')){
            return redirect()->route('loginpage')->with('loginError','Irregular Procedure!');
        }
        $req->validate([
            'password' => 'required|min:6|confirmed',
            
        ]);
        $user = User::find(session('userid'));
        $user->password = $req->password;
        $user->save();

        return redirect()->route('loginpage')->with('message','User Password Reset Successfull.')->with('status','Success');
    }

    public function forgetpassword(){
        return view('layout.forgetpassword');
    }

    public function finduser(Request $request){
        $request->validate([
           'email' => 'required|email',
           'contact' => 'required|size:10'
        ]);
        $user = User::where('email',$request->email)->where('contact',$request->contact)->get();
        if(count($user)>0){
           $resetToken = rand(10000,99999);
           session(['resetToken'=>$resetToken, 'tokenTime' => now(), 'userid'=>$user[0]->id]);
           $toEmail = $request->email;
           Mail::to($toEmail)->send(new PasswordReset($resetToken));
           return redirect()->route('entertoken');
        }else{
            return redirect()->route('forgetpassword')->with('message','No such user Exists!')->with('status','Alert');

        }
        
    }


    public function signup(){
        return view('layout.signup');
    }

    public function login(Request $req){
        $req->validate([
            'useremail' => 'required|email',
            'userpassword' => 'required|min:6'
        ]);
        if(Auth::attempt(['email'=>$req->useremail, 'password'=>$req->userpassword])){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('loginpage')->with('loginError','Invalid Credientials');
        }
    }

    public function create(Request $req){
        $req->validate([
            'username' => 'required',
            'useremail' => 'required|email',
            'usercontact' =>'required|size:10',
            'userpassword' => 'required|min:6'
        ]);
        User::create([
            'name'=> $req->username,
            'email'=> $req->useremail,
            'contact'=> $req->usercontact,
            'password'=> $req->userpassword
        ]);
        return redirect()->route('loginpage')->with('message','User Created Successfully')->with('status','Success');
    }
    public function createAdmin(){
        $user = User::find(9);
        $user->user_role = 'admin';
        $user->save();
        return redirect()->route('loginpage')->with('message','User Created Successfully')->with('status','Success');
    }
    public function dashboard(){
        if(Auth::check()){
            $dog['count'] = Dog::where('user_id',Auth::id())->count();
            $dog['totalearn'] = Dog::where('user_id',Auth::id())->where('available','no')->sum('price');
            $dog['currentdogs'] = Dog::where('user_id',Auth::id())->where('available','yes')->count();
            $dog['sold'] = Dog::where('user_id',Auth::id())->where('available','no')->count();
            return view('layout.dashboard', compact('dog'));
        }
        else{
            return redirect()->route('loginpage')->with('message',"Please login in to Continue.")->with('status','Alert');
        }
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('loginpage');
        }
        else{
            return redirect()->route('loginpage')->with('message',"Please login in to perform the action.")->with('status','Alert');
        }
    }
}
