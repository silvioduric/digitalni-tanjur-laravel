<?php

namespace App\Http\Controllers\Korisnik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kuponi;
use App\User;
use App\KorisnikKupon;
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
        return view('korisnik.kuponi.index')->with('kuponi', Kuponi::all())->with('korisnik', User::find(Auth::user()->id))->with('korisnikKuponi', KorisnikKupon::all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popis()
    {
        return view('korisnik.kuponi.popis')->with('kuponi', Kuponi::all())->with('korisnik', User::find(Auth::user()->id));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kupovina($id)
    {
        return view('korisnik.kuponi.kupovina')->with('kupon', Kuponi::find($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $korisnik = User::find(Auth::user()->id);
        $kupon = Kuponi::find($id);

        if ($korisnik->bodovi >= $kupon->bodovna_cijena) {
            $noviUnos = KorisnikKupon::create([
                'korisnik_id' => $korisnik->id,
                'kupon_id' => $kupon->id,
            ]);

            if ($korisnik->bodovi != 0) {
                $korisnik->bodovi = $korisnik->bodovi - $kupon->bodovna_cijena;
                $korisnik->save();
            }

            return redirect()->route('korisnik.kuponi.popis')->with('poruka', 'Uspješno ste kupili kupon!');
        } else {
            return redirect()->route('korisnik.kuponi.popis')->with('poruka', 'Nemate dovoljno bodova za kupovinu!');
        }
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
