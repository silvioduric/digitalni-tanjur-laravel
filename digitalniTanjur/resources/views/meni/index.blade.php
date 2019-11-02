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
        </div>

        <div id="collapse{{$m->id_meni}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            @if(count($meniStavka) > 1 && count($stavka) > 1)
              @foreach($meniStavka as $ms)
                @if($ms->meni_id === $m->id_meni)
                  @foreach($stavka as $s)
                    @if($s->id_stavke === $ms->stavka_id)
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
