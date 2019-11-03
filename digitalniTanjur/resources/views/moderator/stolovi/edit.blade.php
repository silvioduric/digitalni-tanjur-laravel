@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Uređivanje stola: <span style="color: blue;">{{ $stolovi->naziv }}</span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.stolovi.update', $stolovi) }}" method="post">
                        {{csrf_field()}}
                            <div class="form-check">
                                <label>Naziv stola</label>
                                <input class="form-control" type="text" name="stol" value="{{ $stolovi->naziv }}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection