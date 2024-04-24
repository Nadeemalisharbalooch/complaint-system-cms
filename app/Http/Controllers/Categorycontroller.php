<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorycomplain;
use App\Models\Complain;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $category=Categorycomplain::all();
        return view('auth\category')->with('category',$category);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth\createcategory');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


       
        try {
            $category = Categorycomplain::create([
                'name' => $request->category,
                'username' => $request->category,
            ]);
        return redirect()->back()->with('message', 'Category has been successfuly created.');
         
        } catch (\Exception $e) {
            return redirect()->back()->with('messageerror', "An error occurred: ");
            return "An error occurred: " . $e->getMessage();
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
      
        return view('auth\category');  
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function singlecomplaint(string $id)
    {
           $single=Complain::find($id);
        return view('auth\single')->with('single',$single);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
