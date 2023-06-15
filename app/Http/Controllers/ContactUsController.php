<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Client;
use App\Models\contactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __invoke(ContactRequest $request){

        contactUs::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ]);
        return redirect()->back()->with('message','Added Successfully !');
    }

}
