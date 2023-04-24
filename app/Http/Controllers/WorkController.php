<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index() {
        # code...
        $works = Work::all() ; 
        $works = Work::orderBy('name', 'asc')->paginate(10) ; 
        return view('layouts.home', compact('works')) ; 

    }
}
