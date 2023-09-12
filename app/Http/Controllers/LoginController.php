<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookdb;
use App\Models\admindetails;
use App\Models\studentdetails;
use App\Models\requestbooks;
use Illuminate\Support\Facades\Auth;
use session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $req)
    {
            $req->validate([
                    'userid'=>'required',
                    'password'=>'required'                    
                ]);
            $c=admindetails::select('*')->where(
                [
                    ['userid','=',$req->userid],
                    ['password','=',$req->password],
                ])->get();
            $c2=studentdetails::select('*')->where(
                [
                    ['userid','=',$req->userid],
                    ['password','=',$req->password],
                ])->get();
                if(count($c)>0)
                {
                    //echo "<script>alert('Admin Login Successful')</script>";
                    $book=bookdb::all();
                    $data=compact('book');
                    return view('displaybooks')->with($data);
                }
                else
                {
                    if(count($c2)>0)
                    {               
                        //echo "<script>alert(Student Login Successful')</script>";
                        $com=compact('c2');
                        $book =bookdb::all();
                        $data=compact('book');
                        foreach($c2 as $c)
                        {
                            $req->session()->put('st_id',$c->userid);
                            $req->session()->put('st_name',$c->sname);
                            
                        }
                        return view('studentdashboard')->with($data); 
                    }
                    else
                    {
                        echo "<script>alert('Invalid User-ID or Password')</script>";
                        return view('login');
                    }
                   
                }    
        
    }
    public function displaybooks()
    {
        $book =bookdb::all();
        $data=compact('book');
        return view('displaybooks')->with($data);        
    }
 
}
