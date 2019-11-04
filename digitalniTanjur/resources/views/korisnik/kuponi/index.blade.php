@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <span>Moji kuponi</span>
                  <br>
                  <span>Stanje bodova: {{$korisnik->bodovi}}</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Naziv</th>
                                <th scope="col">Opis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kuponi as $kupon)
                              @foreach($korisnikKuponi as $korisnikKupon)
                                @if($kupon->id == $korisnikKupon->kupon_id && $korisnik->id == $korisnikKupon->korisnik_id)
                                <tr>
                                  <th>{{$kupon->naziv}}</th>
                                  <th>{{$kupon->opis}}</th>
                                </tr>
                                @endif
                              @endforeach
                            @endforeach
                            <tr>
                                <th style="border: none;">
                                    <a href="{{ route('korisnik.kuponi.popis') }}">
                                        <button type="button" class="btn btn-primary btn-sm">Kupi novi</button>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection