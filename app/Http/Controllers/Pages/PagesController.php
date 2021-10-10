<?php

namespace App\Http\Controllers\Pages;

use App\Documents;
use App\Claim;
use App\Lostfound;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{

    public function indexpage()
    {
        return view('pages.index');
    }

    public function lostfound()
    {
        $items = lostfound::all();
        return view('items.lost_items',compact('items'));

    }

    public function submit()
    {
        $document_type = Documents::all();
        return view('items.submit_item', compact('document_type'));

    }


    public function item_list()
    {
        $items = Lostfound::paginate(9);
        return view('items.item_list',compact('items'));
    }

   


    public function claim($id)
    {
        $Claim = Lostfound::find($id);
      
        return view('items.claim_item',compact('Claim'));
    }



    public function submitclaim(Request $request, $id)
    {
        $this->validate(request(), [
            'claimant_name'=> 'required',
            'claimant_email'=> 'required',
            'claimant_phone'=> 'required',
        ]);
      
        $claim = New Claim();
        $item = Lostfound::find($id);


        $claim->claimant_name = $request->claimant_name;
        $claim->claimant_email = $request->claimant_email;
        $claim->claimant_phone = $request->claimant_phone;

        $claim->save();

        $item->claimed = 1;

        $item->save();

        return redirect()->back()->with('success','Claim has been submited, Check Email');

    }



    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }


    //
}
