<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookdb;

use hash;
class addbooksController extends Controller
{
    public function create()
    {
        $url=url('/addbooks/create');
        $title="Add Books";
        $data=compact('url','title');
        return view('addbooks')->with($data);
    }
    public function store(Request $req)
    {
        //echo "<pre>";
        //*print_r($req->all());
        $books=new bookdb;
        $books->isbn_no=$req['isbn'];
        $books->book_name=$req['bname'];
        $books->auth_name= $req['aname'];
        $books->pub_name=$req['publication'];
        $books->bookcount=$req['bookcount'];
        $books->save();
        return redirect(url('/view1'));
        //echo "<script>alert('Item Created Successfully')</script>";    
    }
   public function delete($id)
   {
    //echo "<script>alert('Item Deleted Successfully')</script>";
    bookdb::find($id)->delete();
    
    return redirect(url('/view1')); 
   }
   public function edit($id)
   {
       $books=bookdb::find($id);
       if(is_null($books))
       {
        return redirect(route('dashboard'));
       }
       else
       {
        $title="Update Books";
        $url=url('/addbooks/update')."/".$id;
        $data=compact('books','url','title');
        return view('updatebooks')->with($data);
       }
   }
   public function update($id,Request $req)
   {
    $books=bookdb::find($id);
    $books->isbn_no=$req['isbn'];
    $books->book_name=$req['bname'];
    $books->auth_name= $req['aname'];
    $books->pub_name=$req['publication'];
    $books->bookcount=$req['bookcount'];
    $books->save(); 
    //echo "<script>alert('Item Updated Successfully')</script>";
    return redirect(route('dashboard'));  
   }
}
