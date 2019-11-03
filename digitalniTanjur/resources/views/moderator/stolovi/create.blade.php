@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kreiranje novog stola</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.stolovi.store.novi') }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Naziv stola</label>
                                <input class="form-control" type="text" name="naziv" value="">
                                <div class="radio">
                                    <label style="visibility: hidden;"><input type="radio" name="status" value="Slobodan" checked></label>
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