<?php

namespace App\Http\Controllers;
use App\Models\bookdb;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index()
    {
        return view('searchbooks');
    }
    public function searchbooks(Request $req)
    {
        $search=$req['search'] ?? "";
        if($search!="")
        {
            $book =bookdb::where('book_name','LIKE',"%$search%")->orwhere('auth_name','LIKE',"%$search%")->get();
        }
        else
        {
            $book =bookdb::all();
        }
        
        $data=compact('book','search');
        return view('searchbooks')->with($data);        
    }
}
