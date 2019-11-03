@extends('layouts.app')

@section('content')
@if(count($vinska) > 1)
<div class="container">
  <div class="row">
    <h1>Vinska karta</h1>
    <div id="accordion" class="accordion">
      @foreach($vinska as $v)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$v->id_karte}}"
              aria-expanded="true" aria-controls="collapseOne">
              {{$v->naslov}}
            </button>
          </h5>
        </div>

        <div id="collapse{{$v->id_karte}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            @if(count($vinskaStavka) > 1 && count($stavka) > 1)
              @foreach($vinskaStavka as $vs)
                @if($vs->vinska_karta_id === $v->id_karte)
                  @foreach($stavka as $s)
                    @if($vs->stavka_id == $s->id_stavke)
                      <a href="#" class="stavka">{{$s->naziv}}</a>
                    @endif
                  @endforeach
                @else
                @endif
              @endforeach
            @else
            <p>Nema stavki!</p>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@else
<p>Nema rezultata!</p>
@endif
@endsection
