<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentdetails;

class RegController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function register()
    {
        return redirect('/view2');
        
    }
    public function store(Request $req)
    {
        
        $req->validate([
                'name'=>'required',
                'mob'=>'required',
                'userid'=>'required',
                'password'=>'required',
                'password_confirmation'=>'required|same:password'
            ]);
            $studentdetails=new studentdetails;
            $studentdetails->sname=$req['name'];
            $studentdetails->mobile=$req['mob'];
            $studentdetails->userid= $req['userid'];
            $studentdetails->password=$req['password'];
            $studentdetails->save();
            return redirect(url('/view1'));

    }
}
