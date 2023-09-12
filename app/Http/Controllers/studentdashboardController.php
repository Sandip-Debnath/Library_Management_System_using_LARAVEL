<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookdb;
class studentdashboardController extends Controller
{
    public function index()
    {
        $book =bookdb::all();
        $data=compact('book');
        return view('studentdashboard')->with($data);
    }

}
