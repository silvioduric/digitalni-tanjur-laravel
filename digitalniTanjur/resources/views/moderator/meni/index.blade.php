@extends('layouts.app')

@section('content')
@if(count($meni) > 1)
<div class="container">
  <div class="row">
    <h1>Upravljanje menijem</h1>
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
            
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Naziv</th>
                  <th scope="col">Uređivanje</th>
                  <th scope="col">Brisanje</th>
                </tr>
              </thead>
              <tbody>
              @if(count($meniStavka) > 1 && count($stavka) > 1)
                @foreach($meniStavka as $ms)
                  @if($ms->meni_id === $m->id_meni)
                    @foreach($stavka as $s)
                      @if($s->id_stavke == $ms->stavka_id)
                        <tr>
                          <th>{{$s->naziv}}</th>
                          <th>
                            <a href="{{ route('moderator.meni.edit', $s->id_stavke) }}">
                              <button type="button" class="btn btn-primary btn-sm">Uredi</button>
                            </a>
                          </th>
                          <th>
                            <a href="{{ route('moderator.meni.delete', $s->id_stavke) }}">
                              <button type="button" class="btn btn-primary btn-sm">Obriši</button>
                            </a>
                          </th>
                          </tr>
                        @endif
                      @endforeach
                    @else
                    @endif
                  @endforeach
                  <tr>
                    <th style="border: none;">
                      <a href="{{ route('moderator.meni.create', $m->id_meni) }}">
                        <button type="button" class="btn btn-primary btn-sm">Dodaj novu stavku</button>
                      </a>
                    </th>
                  </tr>
                @else
                  <p>Nema stavki!</p>
                @endif
              </tbody>
            </table>
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