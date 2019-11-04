@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <span>Moje poruke<span>
                  <br>
                  <p>{{ Session::get('poruka') }}</p>
                  <br>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Poruka</th>
                                <th scope="col">Korisnik</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($poruke as $poruka)
                            <tr>
                              @if($korisnik == $poruka->primatelj_id)
                                <th>{{$poruka->poruka}}</th>
                                @foreach($korisnici as $k)
                                  @if($k->id == $poruka->posiljatelj_id)
                                    <th>{{$k->firstName}} {{$k->lastName}}</th>
                                  @endif
                                @endforeach
                                <th>
                                    <a href="{{ route('korisnik.poruke.delete', $poruka->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Obriši</button>
                                    </a>
                                </th>
                              @endif 
                            </tr>
                            @endforeach
                            <tr>
                                <th style="border: none;">
                                    <a href="{{ route('korisnik.poruke.create') }}">
                                        <button type="button" class="btn btn-primary btn-sm">Pošalji novu</button>
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