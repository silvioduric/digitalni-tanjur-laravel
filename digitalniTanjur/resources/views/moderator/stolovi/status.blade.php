@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upravljanje stolom: <span style="color: blue;"></span></div>
                <div class="card-body">
                    <form action="{{ route('moderator.stolovi.statusUpdate', $stolovi) }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-check">
                                <label>Status</label>
                                <div class="radio">
                                    <label><input type="radio" name="status" value="Slobodan" checked> Oslobodi</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="status" value="Rezerviran"> Rezerviraj<br></label>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ažuriraj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection