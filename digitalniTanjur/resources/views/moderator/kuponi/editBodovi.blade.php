@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Uređivanje bodova: <span style="color: blue;">{{ $kuponi->naziv }}</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.kuponi.updateBodovi', $kuponi) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                            <div class="form-check">
                                <label>Broj bodova</label>
                                <input class="form-control" type="number" name="bodovi" value="{{ $kuponi->bodovna_cijena }}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
