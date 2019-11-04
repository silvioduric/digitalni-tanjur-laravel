@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <p>{{ Session::get('poruka') }}</p>
                  <br>
                  <span>Popis kupona</span>
                  <br>
                  <span>Stanje bodova: {{$korisnik->bodovi}}</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Naziv</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Bodovna cijena</th>
                                <th scope="col">Kupovina</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($kuponi as $kupon)
                            <tr>
                              <th>{{$kupon->naziv}}</th>
                              <th>{{$kupon->opis}}</th>
                              <th>{{$kupon->bodovna_cijena}}</th>
                              <th>
                                <a href="{{ route('korisnik.kuponi.kupovina', $kupon->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm">Odabir</button>
                                </a>
                              </th>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection