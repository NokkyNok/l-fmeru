<?php

namespace App\Http\Controllers;

use App\Lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $lost = new Lost();

        $lost->doc_number= $request->doc;
        $lost->doc_category= $request->category;
        $lost->name= $request->name;
        $lost->nationality= $request->nationality;
        $lost->email= $request->email;

        $lost->save();

        return redirect()->back()->with('success','Submission Received, We will keep you updated on its state');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show(Lost $lost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(Lost $lost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lost $lost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lost $lost)
    {
        //
    }
}
