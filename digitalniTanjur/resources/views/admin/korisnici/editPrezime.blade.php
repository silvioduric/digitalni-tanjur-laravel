@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Uređivanje prezimena: <span style="color: blue;">{{ $korisnik->lastName }}</span></div>
                <div class="card-body">
                    <form action="{{ route('admin.korisnici.updatePrezime', $korisnik) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                            <div class="form-check">
                                <label>Prezime korisnika</label>
                                <input class="form-control" type="text" name="prezime" value="{{ $korisnik->lastName }}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
