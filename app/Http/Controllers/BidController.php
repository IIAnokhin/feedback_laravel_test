<?php

namespace App\Http\Controllers;

use App\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all();

        return view('bids.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bid = new Bid();
        $bid->title = $request->get('title');
        $bid->text = $request->get('text');
        $bid->user_id = $request->user()->id;

        if ($request->file('file')) {
            $path = Storage::putFile('public', $request->file('file'));
            $url = Storage::url($path);
            $bid->file = $url;

        }
        $bid->save();

        $bid->toggleStatus($request->get('status'));

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bid = Bid::find($id);

        return view('bids.show', compact('bid'));
    }

}
