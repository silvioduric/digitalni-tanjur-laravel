@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kreiranje nove recenzije</span></div>
                <div class="card-body">
                    <form action="{{ route('korisnik.recenzije.store.novi') }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Recenzija</label>
                                <textarea class="form-control" id="recenzija" name="recenzija" rows="3"></textarea>
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Kreiraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection