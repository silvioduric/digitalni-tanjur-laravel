<?php

namespace App\Http\Controllers\Korisnik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rezervacija;
use App\Stol;
use Illuminate\Support\Facades\Auth;
use DateTime;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('korisnik.rezervacije.index')->with('rezervacije', Rezervacija::all())->with('stolovi', Stol::all())->with('korisnik', Auth::user()->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('korisnik.rezervacije.create')->with('stolovi', Stol::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rezervacije = Rezervacija::all();
        $dt = new DateTime();
        $current = $dt->format('Y-m-d');
        
        foreach($rezervacije as $rezervacija) {
            if ($rezervacija->datum == $request->datum && $rezervacija->vrijeme == $request->vrijeme) {
                return redirect()->route('korisnik.rezervacije.index')->with('poruka', 'Odabrani stol je rezerviran u to vrijeme!');
            }
        }

        if ($request->datum > $current) {
            $novaRezervacija = Rezervacija::create([
                'datum' => $request->datum,
                'vrijeme' => $request->vrijeme,
                'stol_id' => $request->stol,
                'korisnik_id' => Auth::user()->id
            ]);
        } else {
            return redirect()->route('korisnik.rezervacije.index')->with('poruka', 'Datum mora biti današnji ili kasniji!');
        }
        

        return redirect()->route('korisnik.rezervacije.index');
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
        $rezervacija = Rezervacija::find($id);
        $rezervacija->delete();

        return redirect()->route('korisnik.rezervacije.index');
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
