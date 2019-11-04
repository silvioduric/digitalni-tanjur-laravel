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
                                <th scope="col">Vrijeme</th>
                                <th scope="col">Stol</th>
                                <th scope="col">Otkazivanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rezervacije as $rezervacija)
                            <tr>
                                <th>{{$rezervacija->datum}}</th>
                                <th>{{$rezervacija->vrijeme}}</th>
                                @foreach($stolovi as $stol)
                                  @if($stol->id == $rezervacija->stol_id)
                                    <th>{{$stol->naziv}}</th>
                                  @endif
                                @endforeach
                                <th>
                                    <a href="{{ route('moderator.rezervacije.delete', $rezervacija->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Otkaži</button>
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