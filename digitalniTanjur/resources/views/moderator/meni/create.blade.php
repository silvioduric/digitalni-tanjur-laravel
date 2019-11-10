@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kreiranje nove stavke</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.meni.store.novi', $id_menija) }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Naziv stavke</label>
                                <input class="form-control" type="text" name="naziv" value="">
                                <label>Url slike</label>
                                <textarea class="form-control" id="slika" name="slika" rows="2"></textarea>
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Kreiraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection