<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kuponi;
use Illuminate\Support\Facades\Auth;

class KuponiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuponi = Kuponi::all();
        return view('moderator.kuponi.index')->with('kuponi', $kuponi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moderator.kuponi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noviKupon = Kuponi::create([
            'naziv' => $request->naziv,
            'opis' => $request->opis,
            'bodovna_cijena' => $request->bodovi
        ]);

        return redirect()->route('moderator.kuponi.index');
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
    public function editNaziv($id)
    {
        return view('moderator.kuponi.editNaziv')->with('kuponi', Kuponi::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editOpis($id)
    {
        return view('moderator.kuponi.editOpis')->with('kuponi', Kuponi::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBodovi($id)
    {
        return view('moderator.kuponi.editBodovi')->with('kuponi', Kuponi::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNaziv(Request $request, $id)
    {
        $kupon = Kuponi::find($id);
        $kupon->naziv = $request->naziv;
        $kupon->save();

        return redirect()->route('moderator.kuponi.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOpis(Request $request, $id)
    {
        $kupon = Kuponi::find($id);
        $kupon->opis = $request->opis;
        $kupon->save();

        return redirect()->route('moderator.kuponi.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBodovi(Request $request, $id)
    {
        $kupon = Kuponi::find($id);
        $kupon->bodovna_cijena = $request->bodovi;
        $kupon->save();

        return redirect()->route('moderator.kuponi.index');
    }

    public function delete(Request $request, $id)
    {
        $kupon = Kuponi::find($id);
        $kupon->delete();

        return redirect()->route('moderator.kuponi.index');
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
