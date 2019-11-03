@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upravljanje stolovima</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Naziv</th>
                                <th scope="col">Status</th>
                                <th scope="col">Uređivanje</th>
                                <th scope="col">Status</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stolovi as $stol)
                            <tr>
                                <th>{{$stol->naziv}}</th>
                                <th>{{$stol->status}}</th>
                                <th>
                                <a href="{{ route('moderator.stolovi.edit', $stol->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Uredi</button>
                                    </a>
                                </th>
                                <th>
                                <a href="{{ route('moderator.stolovi.status', $stol->id) }}">
                                    @if ($stol->status === "Rezerviran")
                                        <button type="button" class="btn btn-primary btn-sm">Oslobodi</button>
                                    @else
                                        <button type="button" class="btn btn-primary btn-sm">Rezerviraj</button>
                                    @endif
                                </a>
                                </th>
                                <th>
                                <a href="{{ route('moderator.stolovi.delete', $stol->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm">Obriši</button>
                                </a>
                                </th>
                            </tr>
                            @endforeach
                            <tr>
                                <th style="border: none;">
                                    <a href="{{ route('moderator.stolovi.create') }}">
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