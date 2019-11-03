@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Recenzije</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Recenzija</th>
                                <th scope="col">Korisnik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recenzije as $recenzija)
                            <tr>
                                <th>{{$recenzija->recenzija}}</th>
                              @foreach($korisnici as $korisnik)
                                @if($korisnik->id == $recenzija->korisnik_id)
                                  <th>{{$korisnik->firstName}} {{$korisnik->lastName}}</th>
                                @endif
                              @endforeach
                            </tr>
                            @endforeach
                            <tr>
                                <th style="border: none;">
                                    <a href="{{ route('korisnik.recenzije.create') }}">
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