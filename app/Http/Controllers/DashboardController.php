<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmMail;

class DashboardController extends Controller
{
    public function admin(){
        if(Auth::user()->user_role==='admin'){
            $users = User::get();
            $dogs = Dog::with('user:id,name')->get();
            $orderCount = Order::where('sold', false)->count();
            return view('dashboard.admin',compact('users','dogs', 'orderCount'));

        }else{
            return redirect()->route('dashboard')->with('status','Alert')->with('message','Your are not the Admin of the Page.');
        }
        
    }
    public function notice(){
        return view('dashboard.notice');
    }
    // public function togglestatus($id){
    //     $dog = Dog::find($id);

    //     if($dog->user_id===Auth::id()){
    //         $dog->available==='yes'?$dog->available = 'no':$dog->available = 'yes';
    //         $dog->save();
    //         return redirect()->route('dashboard.market')->with('status','Success')->with('message','Successfully changed the availability of the Dog.');
    //     }else{
    //         return redirect()->route('dashboard.market')->with('status','Alert')->with('message','Unauthorized Access!');
    //     }
    // }
    public function market(){
        $dogs = Dog::get();
        return view('dashboard.market', compact('dogs'));
    }
    public function buydog(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'contact' => 'required| min:10',
            'address' => 'required|min:5',
            'dogId' => 'required'
        ]);
        $order = Order::create([
            'buyer_name' => $request->name,
            'buyer_email' => $request->email,
            'buyer_contact' => $request->contact,
            'buyer_address' => $request->address,
            'user_id' => Auth::id(),
            'dog_id' => $request->dogId
        ]);
        $toEmail = $request->email;
        Mail::to($toEmail)->send(new confirmMail());
        if($order){
            return redirect()->route('dashboard.market')->with('status','Success')->with('message','Successfully requested for buying the Dog.');
        }else{
            return redirect()->route('dashboard.market')->with('status','Alert')->with('message','Some Error Occured!');
        }
    }
    public function selldog(){
        $orders = Order::with('dog:id,image_path,price,name')->get();
        $count = Order::where('sold', false)->count();
        return view('dashboard.selldogs', compact('orders', 'count'));
    }
    public function dogsold($id){
        $order = Order::find($id);
        $order->sold = true;
        $order->save();
        $dog = Dog::find($order->dog_id);
        $dog->available = 'no';
        $dog->save();
        Order::where('dog_id', $order->dog_id)->where('sold', false)->delete();
        if($order && $dog){
            return redirect()->route('selldog')->with('status','Success')->with('message','Successfully Sold the Dog.');
        }else{
            return redirect()->route('selldog')->with('status','Alert')->with('message','Some Error Occured!');
        }
    }
    
}
