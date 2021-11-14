<?php

namespace App\Http\Controllers\Store;

use App\Lostfound;
use App\Claim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Itemcontroller extends Controller
{

    public function index()
    {
        $items = Lostfound::all();
        return view('admin.l$fitems.dashboard',compact('items'));
    }

    public function Claimed()
    {
        $claimed = Lostfound::where('claimed',1)->get();
        return view('admin.l$FITEMS.allocated', compact('claimed'));
    }

    public function claimant()
    {
        $claimed = Claim::all();
        return view('admin.l$FITEMS.claims', compact('claimed'));
    }
    //
}
