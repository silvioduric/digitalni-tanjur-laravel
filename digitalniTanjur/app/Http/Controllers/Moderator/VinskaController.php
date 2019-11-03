<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VinskaKarta;
use App\VinskaKartaStavka;
use App\Stavka;
use Illuminate\Support\Facades\Auth;

class VinskaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinska = VinskaKarta::all();
        $vinskaStavka = VinskaKartaStavka::all();
        $stavka = Stavka::all();
        return view('moderator.vinska.index')->with('vinska', $vinska)->with('vinskaStavka', $vinskaStavka)->with('stavka', $stavka);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('moderator.vinska.create')->with('id_karte', $id);
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

        $vinskaStavka = VinskaKartaStavka::create([
            'vinska_karta_id' => $id,
            'stavka_id' => $novaStavka->id_stavke
        ]);

        return redirect()->route('moderator.vinska.index');
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
        return view('moderator.vinska.edit')->with('stavke', Stavka::find($id));
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

        return redirect()->route('moderator.vinska.index');
    }


    public function delete(Request $request, $id)
    {
        $stavka = Stavka::find($id);
        $stavka->delete();

        return redirect()->route('moderator.vinska.index');
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
