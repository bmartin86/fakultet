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
        return view ('dvoranas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dvorana $dvorana)
    {
        $validatedData = $request->validate([
            'naziv' => 'required|string|max:5|alpha_num',
            'kapacitet' => 'numeric|between:0,9999',
        ]);
        $dvorana->naziv = $request->input('naziv');
        $dvorana->kapacitet = $request->input('kapacitet');
        $dvorana->save(); 

        return redirect()->route('dvoranas.index')->with('success', 'Film added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function show(Dvorana $dvorana)
    {
        return view('dvoranas.show', ['dvorana' => $dvorana]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function edit(Dvorana $dvorana)
    {
        return view('dvoranas.edit', ['dvorana' => $dvorana]);
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
      $validatedData = $request->validate([
            'dvorana_id' => 'required|numeric',
            'naziv' => 'required|string|max:5|alpha_num',
            'kapacitet' => 'numeric|between:0,9999',
        ]);
        $dvorana->naziv = $request->input('naziv');
        $dvorana->kapacitet = $request->input('kapacitet');
        $dvorana->save(); 

        return redirect()->route('dvoranas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dvorana $dvorana)
    {
        $dvorana->delete();
        return redirect()->route('dvoranas.index');
    }
}
