@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upravljanje rezervacijama</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Datum</th>
                                <th scope="col">Vrijeme od</th>
                                <th scope="col">Vrijeme do</th>
                                <th scope="col">Stol</th>
                                <th scope="col">Otkazivanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <p>{{ Session::get('poruka') }}</p>

                            @foreach($rezervacije as $rezervacija)
                            <tr>
                                <th>{{date('d-m-Y', strtotime($rezervacija->datum))}}</th>
                                <th>{{$rezervacija->vrijeme_od}}</th>
                                <th>{{$rezervacija->vrijeme_do}}</th>
                                @foreach($stolovi as $stol)
                                  @if($stol->id == $rezervacija->stol_id)
                                    <th>{{$stol->naziv}}</th>
                                  @endif
                                @endforeach
                                @if($rezervacija->korisnik_id == $korisnik)
                                <th>
                                    <a href="{{ route('korisnik.rezervacije.delete', $rezervacija->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Otkaži</button>
                                    </a>
                                </th>
                                @endif
                            </tr>
                            @endforeach
                            <tr>
                                <th style="border: none;">
                                    <a href="{{ route('korisnik.rezervacije.create') }}">
                                        <button type="button" class="btn btn-primary btn-sm">Dodaj novu</button>
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