@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kreiranje novog kupona</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.kuponi.store.novi') }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Naziv kupona</label>
                                <input class="form-control" type="text" name="naziv" value="">
                                <label>Opis kupona</label>
                                <input class="form-control" type="text" name="opis" value="">
                                <label>Bodovna cijena</label>
                                <input class="form-control" type="number" name="bodovi" value="">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Kreiraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection