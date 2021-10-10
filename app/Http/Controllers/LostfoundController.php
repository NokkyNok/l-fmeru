<?php

namespace App\Http\Controllers;

use Auth;
use App\Documents;
use App\Lostfound;
use App\Mail\receivedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Block\Element\Document;

class LostfoundController extends Controller
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
        $this->validate(request(), [
            'item' => 'required',
            'location' => 'required',
            'Received_date' => 'required',
            'Received_time' => 'required',
            'short_description'=>'required',
            'doc_type' => 'required',
            'bearer'=>'required',
            'location_desc'=>'required',
            'Received_location'=>'required',
            'phone'=>'required',
            'sample_image' => 'required',
        ]);
        

        $lostfound= new Lostfound();


        $fileName = time().'.'.$request->sample_image->extension();  
   
        $request->sample_image->move(public_path('uploads'), $fileName);

        $lostfound->sample_image = $fileName;
        
        
        $lostfound->item = $request->item;
        $lostfound->location = $request->location;
        $lostfound->Received_date= $request->Received_date;
        $lostfound->Received_time= $request->Received_time;
        $lostfound->short_description= $request->short_description;
        $lostfound->doc_type= $request->doc_type;
        $lostfound->bearer= $request->bearer;
        $lostfound->location_desc= $request->location_desc;
        $lostfound->Received_location= $request->Received_location;
        $lostfound->phone= $request->phone;
        $lostfound->Received_from = Auth::user()->name;
        $lostfound->Received_email = Auth::user()->email;
        $lostfound->user_id = Auth::id();
        $lostfound->save();

        Mail::to(Auth::user()->email)->send(new receivedMail());






        return redirect()->back()->with('success','Thanks for submiting the document to us! You will receive our thankyou email');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lostfound  $lostfound
     * @return \Illuminate\Http\Response
     */
    public function show(Lostfound $lostfound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lostfound  $lostfound
     * @return \Illuminate\Http\Response
     */
    public function edit(Lostfound $lostfound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lostfound  $lostfound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lostfound $lostfound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lostfound  $lostfound
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lostfound $lostfound)
    {
        //
    }
}
