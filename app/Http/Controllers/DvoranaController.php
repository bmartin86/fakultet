<?php

namespace App\Http\Controllers;

use App\Dvorana;
use Illuminate\Http\Request;

class DvoranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dvorana = Dvorana::all();
        return view('dvoranas.index', compact('dvorana'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function show(Dvorana $dvorana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function edit(Dvorana $dvorana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dvorana $dvorana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dvorana $dvorana)
    {
        //
    }
}
