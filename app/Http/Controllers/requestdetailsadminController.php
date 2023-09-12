<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requestbooks;
class requestdetailsadminController extends Controller
{
    public function index()
    {
        $requestitems =requestbooks::all();
        $pass=compact('requestitems');
        return view('requestdetailsadmin')->with($pass);
    }
}
