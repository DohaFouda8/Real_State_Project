<?php

namespace App\Http\Controllers;

use App\Models\Unites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreUnitesController extends Controller
{
    public function index(){
        return view('dash2.addunit');
    }

    public function show($id){
        $unites=Unites::get();
        return view('dash2.deletunit', compact('unites'));
    }
    public function store(Request $request){
        // return $request;
        $this->validate($request,[
            'Name'=>'required',
            "Price"=>'required',
            "file" =>'required',
            "address"=>'required'
        ]);

        $image = request()->file('file');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/images/uploadedImages', $filename);

        Unites::create([
            'number'=>"1",
            'address'=>$request->address,
            'name'=>$request->Name,
            'price'=>$request->Price,
            'bank_id'=>1,
            'image'=>$filename,
            'clients_id'=>Auth::user()->id

        ]);
        return redirect()->back()->with('message','Added Successfully !');
    }

    public function delete($id){
        $unit=Unites::findOrFail($id);
        $unit->delete();
        return redirect()->back()->with('message','Deleted Successfully !');

    }
    


}
