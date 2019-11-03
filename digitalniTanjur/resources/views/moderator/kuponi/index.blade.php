@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upravljanje kuponima</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Naziv</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Bodovna cijena</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kuponi as $kupon)
                            <tr>
                                <th><a href="{{ route('moderator.kuponi.editNaziv', $kupon->id) }}">{{$kupon->naziv}}</a></th>
                                <th><a href="{{ route('moderator.kuponi.editOpis', $kupon->id) }}">{{$kupon->opis}}</a></th>
                                <th><a href="{{ route('moderator.kuponi.editBodovi', $kupon->id) }}">{{$kupon->bodovna_cijena}}</a></th>
                                <th>
                                    <a href="{{ route('moderator.kuponi.delete', $kupon->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Obriši</button>
                                    </a>
                                </th>

                            </tr>
                            @endforeach
                            <tr>
                                <th style="border: none;">
                                    <a href="{{ route('moderator.kuponi.create') }}">
                                        <button type="button" class="btn btn-primary btn-sm">Dodaj novi</button>
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