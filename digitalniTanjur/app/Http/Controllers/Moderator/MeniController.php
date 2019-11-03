<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meni;
use App\MeniStavka;
use App\Stavka;
use Illuminate\Support\Facades\Auth;

class MeniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meni = Meni::all();
        $meniStavka = MeniStavka::all();
        $stavka = Stavka::all();
        return view('moderator.meni.index')->with('meni', $meni)->with('meniStavka', $meniStavka)->with('stavka', $stavka);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('moderator.meni.create')->with('id_menija', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $novaStavka = Stavka::create([
            'naziv' => $request->naziv
        ]);

        $meniStavka = MeniStavka::create([
            'meni_id' => $id,
            'stavka_id' => $novaStavka->id_stavke
        ]);

        return redirect()->route('moderator.meni.index');
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
        return view('moderator.meni.edit')->with('stavke', Stavka::find($id));
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
        $stavka = Stavka::find($id);
        $stavka->naziv = $request->naziv;
        $stavka->save();

        return redirect()->route('moderator.meni.index');
    }

    public function delete(Request $request, $id)
    {
        $stavka = Stavka::find($id);
        $stavka->delete();

        return redirect()->route('moderator.meni.index');
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
