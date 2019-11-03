@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kreiranje nove rezervacije</span></div>
                <div class="card-body">
                    <form action="{{ route('korisnik.rezervacije.store.novi') }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Datum</label>
                                <input class="form-control" type="date" name="datum" value="">
                                <label>Vrijeme</label>
                                <input class="form-control" type="time" name="vrijeme" value="">
                                <label>Stol</label>
                                <div class="form-group">
                                  <select class="custom-select" name="stol">
                                    @foreach($stolovi as $stol)
                                      <option value="{{ $stol->id }}">{{ $stol->naziv }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Kreiraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection