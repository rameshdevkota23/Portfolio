<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function register(Request $request){
      
    //   echo gettype($request);
    //     echo "<pre>";
    //     print_r($request->all());
    $customer = new Customer;
    $customer->name=$request['uname'];
    $customer->email=$request['email'];
    $customer->address=$request['address'];
    $customer->save();

    }
}
