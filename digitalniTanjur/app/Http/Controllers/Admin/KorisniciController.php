<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\TipKorisnika;
use Illuminate\Support\Facades\Auth;

class KorisniciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.korisnici.index')->with('korisnici', User::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        return view('admin.korisnici.edit')->with(['korisnik' => User::find($id), 'uloge' => TipKorisnika::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editIme($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        return view('admin.korisnici.editIme')->with('korisnik', User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPrezime($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        return view('admin.korisnici.editPrezime')->with('korisnik', User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editEmail($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        return view('admin.korisnici.editEmail')->with('korisnik', User::find($id));
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
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        $korisnik = User::find($id);
        $korisnik->roles()->sync($request->uloge);

        return redirect()->route('admin.korisnici.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIme(Request $request, $id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        $korisnik = User::find($id);
        $korisnik->firstName = $request->ime;
        $korisnik->save();

        return redirect()->route('admin.korisnici.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePrezime(Request $request, $id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        $korisnik = User::find($id);
        $korisnik->lastName = $request->prezime;
        $korisnik->save();

        return redirect()->route('admin.korisnici.index');
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEmail(Request $request, $id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.korisnici.index');
        }

        $korisnik = User::find($id);
        $korisnik->email = $request->email;
        $korisnik->save();

        return redirect()->route('admin.korisnici.index');
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
