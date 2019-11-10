@extends('layouts.app')

@section('content')
@if(count($meni) > 1)
<div class="container">
  <div class="row">
    <h1>Meni</h1>
    <div id="accordion" class="accordion">
      @foreach($meni as $m)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$m->id_meni}}"
              aria-expanded="true" aria-controls="collapseOne">
              {{$m->naslov}}
            </button>
          </h5>
          <img src="{{$m->slika}}" alt="" style="width: 20%; border-radius: 10px;">
        </div>

        <div id="collapse{{$m->id_meni}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            @if(count($meniStavka) > 1 && count($stavka) > 1)
              @foreach($meniStavka as $ms)
                @if($ms->meni_id === $m->id_meni)
                  @foreach($stavka as $s)
                    @if($ms->stavka_id == $s->id_stavke)
                      <a href="#" class="stavka">{{$s->naziv}}</a>
                      <img src="{{$s->slika}}" alt="" style="width: 15%; border-radius: 10px;">
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
