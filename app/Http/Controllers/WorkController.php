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
        $works = Work::orderBy('titre', 'asc')->paginate(10) ; 
        return view('layouts.home', compact('works')) ; 

    }

    public function add(Request $request)
    {
        # code...
        $worksNew = new Work ; 

        $request->validate(['titre'=>'required|min:5']) ; 

        if ($request->file()) {

            $fileWork = $request->image->store('public/images') ;
            $worksNew->image = $fileWork ; 
    
            }
    
            $worksNew->description = $request->description ; 
            $worksNew->titre = $request->titre ; 
            $worksNew->save() ;
            return redirect(route('layouts.add')) ; 

    }

    public function edit(Request $request, $id = 0)
    {
        # code...
        $work = Work::findOrFail($id) ; 

        $request->validate(['titre'=>'required|min:5']) ; 

        if ($request->file()) {

            if ($actu->image != '') {
                Storage::delete($actu->image) ; 
            }

            $fileWork = $request->image->store('public/images') ;
            $worksNew->image = $fileWork ; 
    
            }
    
            $worksNew->description = $request->description ; 
            $worksNew->titre = $request->titre ; 
            $worksNew->save() ;
            return redirect(route('layouts.add')) ; 

    }
}
