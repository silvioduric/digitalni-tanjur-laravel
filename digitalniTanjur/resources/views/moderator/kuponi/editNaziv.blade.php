@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Uređivanje naziva: <span style="color: blue;">{{ $kuponi->naziv }}</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.kuponi.updateNaziv', $kuponi) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                            <div class="form-check">
                                <label>Naziv kupona</label>
                                <input class="form-control" type="text" name="naziv" value="{{ $kuponi->naziv }}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
