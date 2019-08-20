@extends('layouts.app')

@section('content')
@if(count($vina) > 1)

<div class="container">
  <div class="row justify-content-center">
  @foreach($vina as $vino)
    <div class="col-md-12 spaced">
      <div class="card">
        <div class="card-header">Odaberite:</div>
          <div class="card-body">
            <a href="#"><h3>{{$vino->naziv}}</h3></a>
          </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
@else
  <p>Vina trenutno nisu dostupna!</p>
@endif
@endsection

<style>
  .spaced {
    padding: 5px;
  }
</style>