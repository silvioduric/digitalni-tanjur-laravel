@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upravljanje korisnicima</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Ime</th>
                                <th scope="col">Prezime</th>
                                <th scope="col">Email</th>
                                <th scope="col">Uloga</th>
                                <th scope="col">Upravljanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($korisnici as $korisnik)
                            <tr>
                                <th>{{$korisnik->firstName}}</th>
                                <th>{{$korisnik->lastName}}</th>
                                <th>{{$korisnik->email}}</th>
                                <th>{{ implode(', ',$korisnik->roles()->get()->pluck('naziv_tipa')->toArray()) }}</th>
                                <th>
                                    <a href="{{ route('admin.korisnici.edit', $korisnik->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Uredi</button>
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