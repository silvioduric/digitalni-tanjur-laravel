@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upravljanje korisnikom: <span style="color: blue;">{{ $korisnik->firstName }} {{ $korisnik->lastName }}</span></div>
                <div class="card-body">
                    <form action="{{ route('admin.korisnici.update', $korisnik) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        @foreach($uloge as $uloga)
                            <div class="form-check">
                                <input type="checkbox" name="uloge[]" value="{{ $uloga->id }}" 
                                    {{ $korisnik->hasRole($uloga->naziv_tipa)?'checked':'' }}>
                                <label>{{ $uloga->naziv_tipa }}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection