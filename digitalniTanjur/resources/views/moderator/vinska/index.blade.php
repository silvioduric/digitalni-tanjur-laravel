@extends('layouts.app')

@section('content')
@if(count($vinska) > 1)
<div class="container">
  <div class="row">
    <h1>Upravljanje vinskom kartom</h1>
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
              @if(count($vinskaStavka) > 1 && count($stavka) > 1)
                @foreach($vinskaStavka as $vs)
                  @if($vs->vinska_karta_id === $v->id_karte)
                    @foreach($stavka as $s)
                      @if($s->id_stavke == $vs->stavka_id)
                        <tr>
                          <th>{{$s->naziv}}</th>
                          <th>
                            <a href="{{ route('moderator.vinska.edit', $s->id_stavke) }}">
                              <button type="button" class="btn btn-primary btn-sm">Uredi</button>
                            </a>
                          </th>
                          <th>
                            <a href="{{ route('moderator.vinska.delete', $s->id_stavke) }}">
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
                      <a href="{{ route('moderator.vinska.create', $v->id_karte) }}">
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