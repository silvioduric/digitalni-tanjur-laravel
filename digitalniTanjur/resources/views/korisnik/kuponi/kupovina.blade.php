@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kupovina kupona: {{$kupon->naziv}}</span></div>
                <div class="card-body">
                    <form action="{{ route('korisnik.kuponi.store.novi', $kupon->id) }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Jeste li sigurni da želite kupiti ovaj kupon?</label>
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Da</button>
                    </form>
                    <br>
                    <a href="{{ route('korisnik.kuponi.index') }}">
                      <button type="button" class="btn btn-primary btn-sm">Ne</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection