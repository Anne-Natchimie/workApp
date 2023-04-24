<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index() {
        # code...
        $works = Work::orderBy('name', 'asc')->paginate(10) ; 
        return view('layouts.news', compact('works')) ; 

    }
}
