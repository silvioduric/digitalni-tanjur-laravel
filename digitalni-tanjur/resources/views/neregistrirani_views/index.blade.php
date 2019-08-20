@extends('layouts.app')

@section('content')
@if(count($jelovnici) > 1)

<div class="container">
  <div class="row justify-content-center">
  @foreach($jelovnici as $jelovnik)
    <div class="col-md-12 spaced">
      <div class="card">
        <div class="card-header">Odaberite:</div>
          <div class="card-body">
            <a href="#"><h3>{{$jelovnik->naziv}}</h3></a>
          </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
@else
  <p>Jelovnici trenutno nisu dostupni!</p>
@endif
@endsection

<style>
  .spaced {
    padding: 5px;
  }
</style>