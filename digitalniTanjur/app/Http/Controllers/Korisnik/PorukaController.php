<?php

namespace App\Http\Controllers\Korisnik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Poruka;
use App\User;
use Illuminate\Support\Facades\Auth;

class PorukaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('korisnik.poruke.index')->with('poruke', Poruka::all())->with('korisnici', User::all())->with('korisnik', Auth::user()->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('korisnik.poruke.create')->with('korisnici', User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $korisnik = User::find(Auth::user()->id);

        $noviUnos = Poruka::create([
            'poruka' => $request->poruka,
            'primatelj_id' => $request->korisnik,
            'posiljatelj_id' => Auth::user()->id
        ]);

        $korisnik->bodovi = $korisnik->bodovi + 5;
        $korisnik->save();

        return redirect()->route('korisnik.poruke.index')->with('poruka', 'Poruka uspješno poslana!');
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
        //
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
        //
    }


    public function delete(Request $request, $id)
    {
        $korisnikData = User::find(Auth::user()->id);

        $poruka = Poruka::find($id);
        $poruka->delete();

        if ($korisnikData->bodovi != 0) {
            $korisnikData->bodovi = $korisnikData->bodovi - 5;
            $korisnikData->save();
        }

        return redirect()->route('korisnik.poruke.index');
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
