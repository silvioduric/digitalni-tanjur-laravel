<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stol;
use Illuminate\Support\Facades\Auth;

class StoloviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('moderator.stolovi.index')->with('stolovi', Stol::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moderator.stolovi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noviStol = new Stol();
        $noviStol->naziv =  $request->naziv;
        $noviStol->status =  $request->status;
        $noviStol->save();
        return redirect()->route('moderator.stolovi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('moderator.stolovi.edit')->with(['stolovi' => Stol::find($id)]);
    }

    public function status($id)
    {
        return view('moderator.stolovi.status')->with(['stolovi' => Stol::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stol = Stol::find($id);
        $stol->naziv = $request->stol;
        $stol->save();

        return redirect()->route('moderator.stolovi.index');
    }

    public function statusUpdate(Request $request, $id)
    {
        $stol = Stol::find($id);
        $stol->status = $request->status;
        $stol->save();

        return redirect()->route('moderator.stolovi.index');
    }


    public function delete(Request $request, $id)
    {
        $stol = Stol::find($id);
        $stol->delete();

        return redirect()->route('moderator.stolovi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
