@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Uređivanje stavke: <span style="color: blue;">{{ $stavke->naziv }}</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.meni.update', $stavke) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                            <div class="form-check">
                                <label>Naziv stavke</label>
                                <input class="form-control" type="text" name="naziv" value="{{ $stavke->naziv }}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection