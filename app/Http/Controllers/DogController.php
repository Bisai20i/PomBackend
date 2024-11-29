<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::where('user_id', Auth::id())->get();
        return view('dashboard.dogs',compact('dogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addDogs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dogname'=>'required',
            'dogdescription'=>'required',
            'dogprice'=>'required',
            'dogbreed'=>'required',
            'dogimage'=>'nullable|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = time().'.'.$request->file('dogimage')->extension();     
        
        $request->file('dogimage')->move(public_path('/uploads'),$imageName);
        
        $dog = Dog::create([
            'name' => $request->dogname,
            'price' => $request->dogprice,
            'description' => $request->dogdescription,
            'breed' => $request->dogbreed,
            'image_path' => $imageName,
            'user_id' => Auth::id(),
        ]);
        
        return redirect()->route('dogs.index')->with('status', 'Success')->with('message','New record of Dog added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dog = Dog::find($id);
        if(Auth::id()===$dog->user_id){
            return view('dashboard.editDog',compact('dog'));
        }
        else{
            return redirect()->route('dogs.index')->with('status', 'Alert')->with('message','Unauthorized Access');

        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'dogname'=>'required',
            'dogdescription'=>'required',
            'dogprice'=>'required',
            'dogbreed'=>'required',
            'dogimage'=>'nullable|mimes:jpeg,png,jpg,gif',
        ]);
        $dog = Dog::find($id);
        if($request->hasFile('dogimage')){
            
            $oldFilePath= public_path('/uploads/').$dog->image_path;
            if(file_exists($oldFilePath)){
                @unlink($oldFilePath);
            }
            $imageName = time().'.'.$request->file('dogimage')->extension();     
            $request->file('dogimage')->move(public_path('/uploads'),$imageName);
            $dog->image_path = $imageName;
        }
        $dog->name = $request->dogname;
        $dog->price = $request->dogprice;
        $dog->description = $request->dogdescription;
        $dog->breed = $request->dogbreed;

        $dog->save();      
        return redirect()->route('dogs.index')->with('status', 'Success')->with('message','Record of Dog Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dog = Dog::find($id);
        if(Auth::id()===$dog->user_id){
            $oldFilePath= public_path('/uploads/').$dog->image_path;
            if(file_exists($oldFilePath)){
                @unlink($oldFilePath);
            }
            $dog->delete();
            return redirect()->route('dogs.index')->with('status', 'Success')->with('message','Record of Dog Deleted Successfully.');
        }
        else{
            return redirect()->route('dogs.index')->with('status', 'Alert')->with('message','Unauthorized Access');

        }
    }
}
