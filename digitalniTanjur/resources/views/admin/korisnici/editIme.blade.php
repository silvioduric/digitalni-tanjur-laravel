@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Uređivanje imena: <span style="color: blue;">{{ $korisnik->firstName }}</span></div>
                <div class="card-body">
                    <form action="{{ route('admin.korisnici.updateIme', $korisnik) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                            <div class="form-check">
                                <label>Ime korisnika</label>
                                <input class="form-control" type="text" name="ime" value="{{ $korisnik->firstName }}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
