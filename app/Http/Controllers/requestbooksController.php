<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requestbooks;
use App\Models\bookdb;
class requestbooksController extends Controller
{
     public function index()
    {
        return view('requestbooks');
    }
       
    public function requestbox(Request $req)
    {
        $search=$req['reqsearch'] ?? "";
        if($search!="")
        {
            $requestitems=requestbooks::where('studentid','=',"$search")->get();
        }
        else
        {
            $requestitems =requestbooks::all();
        }
        
        $pass=compact('requestitems','search');
        return view('requestbooks')->with($pass);
    }
    public function requestissue($id,$bookid)
    {
        $r=bookdb::find($bookid)->decrement('bookcount', 1);
        requestbooks::find($id)->delete();
        return redirect(url('requestbox'));              

    }
    public function requestdel($id)
    {
        requestbooks::find($id)->delete();
        return redirect(url('requestbox'));
    }
}
