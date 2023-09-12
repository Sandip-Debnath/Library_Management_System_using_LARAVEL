<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\bookdb;
use App\Models\requestbooks;
use session;
class studentsearchController extends Controller
{
    public function index()
    {
        return view('studentsearch');
    }
    public function searchbooks(Request $req)
    {
        $search=$req['search1'] ?? "";
        if($search!="")
        {
            $book =bookdb::where('book_name','LIKE',"%$search%")->orwhere('auth_name','LIKE',"%$search%")->get();
        }
        else
        {
            $book =bookdb::all();
        }
        
        $data=compact('book','search');
        return view('studentsearch')->with($data);        
    }
    public function request($id)
    {
        $r=new requestbooks;
        $books=bookdb::find($id);        
        $r->studentid=session()->get('st_id');
        $r->studentname=session()->get('st_name');
        $r->bookid=$books->id;
        $r->author_name=$books->auth_name;    
        $r->bookname=$books->book_name;
        //$books->bookcount=$books->bookcount-1;
        $r->save();
        $book =bookdb::all();
        $data=compact('book');
        return view('studentdashboard')->with($data);

    }
}
