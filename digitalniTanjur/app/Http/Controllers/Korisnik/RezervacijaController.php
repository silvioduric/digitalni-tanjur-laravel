<?php

namespace App\Http\Controllers\Korisnik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rezervacija;
use App\Stol;
use App\User;
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
        $stol = Stol::find($request->stol);
        
        foreach($rezervacije as $rezervacija) {
            if ($rezervacija->datum == $request->datum && $rezervacija->vrijeme == $request->vrijeme) {
                return redirect()->route('korisnik.rezervacije.index')->with('poruka', 'Odabrani stol je rezerviran u to vrijeme!');
            }
        }

        if ($request->datum > $current) {
            if ($stol->status == 'Slobodan') {
                $korisnikData = User::find(Auth::user()->id);
                if ($request->vrijemeDo > $request->vrijemeOd) {
                    if ((strtotime($request->vrijemeDo) - strtotime($request->vrijemeOd))/3600 <= 2) {
                        $novaRezervacija = Rezervacija::create([
                            'datum' => $request->datum,
                            'vrijeme_od' => $request->vrijemeOd,
                            'vrijeme_do' => $request->vrijemeDo,
                            'stol_id' => $request->stol,
                            'korisnik_id' => Auth::user()->id
                        ]);
        
                        $korisnikData->bodovi = $korisnikData->bodovi + 35;
                        $korisnikData->save();
                    } else {
                        return redirect()->route('korisnik.rezervacije.index')->with('poruka', 'Rezervacija ne može trajati više od 2 sata');
                    } 
                } else {
                    return redirect()->route('korisnik.rezervacije.index')->with('poruka', 'Vrijeme od veće od vremena do što nije ispravan unos');
                }
            } else {
                return redirect()->route('korisnik.rezervacije.index')->with('poruka', 'Odabrani stol je pod rezervacijom od strane administratora odaberite neki drugi stol!');
            }
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
        $korisnikData = User::find(Auth::user()->id);

        $rezervacija = Rezervacija::find($id);
        $rezervacija->delete();

        if ($korisnikData->bodovi != 0) {
            $korisnikData->bodovi = $korisnikData->bodovi - 35;
            $korisnikData->save();
        }
        
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
