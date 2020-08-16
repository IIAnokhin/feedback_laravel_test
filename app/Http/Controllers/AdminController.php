<?php

namespace App\Http\Controllers;

use App\Bid;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $bids = Bid::orderBy('created_at','desc')->get();

        return view('admin.index', compact('bids'));
    }

    public function store(Request $request)
    {
        $bid = toggleStatus($request->get('status'));

        redirect()->route('admin.index');
    }

}
