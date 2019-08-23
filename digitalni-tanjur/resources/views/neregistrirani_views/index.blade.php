@extends('layouts.app')

@section('content')
@if(count($jelovnici) > 0)

<div class="container">
  <div class="row justify-content-center">
    @foreach($jelovnici as $key=>$jelovnik)
    <div class="col-md-12 spaced">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true"
                aria-controls="collapseOne"><h3>{{$jelovnik->naziv}}</h3></button>
            </h5>
          </div>
          <div id="collapse{{$key}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                @if(count($jelovniciStavka) > 0)
                  @foreach($jelovniciStavka as $jelovnikStavka)
                    @if($jelovnikStavka->id_jelovnik == $key+1)
                      <h5>{{$jelovnikStavka->naziv}} {{$jelovnikStavka->cijena}} kn</h5>
                      <h6>Sadržaj: {{$jelovnikStavka->sadrzaj}}</h6>
                    @endif
                  @endforeach
                @else
                  <p>Trenutno nema stavki na jelovniku!</p>
                @endif
            </div>
          </div>
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