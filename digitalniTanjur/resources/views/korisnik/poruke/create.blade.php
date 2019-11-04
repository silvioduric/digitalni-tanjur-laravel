@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nova poruka</span></div>
                <div class="card-body">
                    <form action="{{ route('korisnik.poruke.store.novi') }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Poruka</label>
                                <input class="form-control" type="text" name="poruka" value="">
                                <br>
                                <label>Primatelj</label>
                                <div class="form-group">
                                  <select class="custom-select" name="korisnik">
                                    @foreach($korisnici as $korisnik)
                                      @if($korisnik->id != '1' && $korisnik->id != '2')
                                        <option value="{{ $korisnik->id }}">{{ $korisnik->firstName }} {{ $korisnik->lastName }}</option>
                                      @endif
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Pošalji</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection