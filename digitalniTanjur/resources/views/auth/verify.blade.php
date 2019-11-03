@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite Vašu email adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Novi link za potvrdu email adrese je poslan.') }}
                        </div>
                    @endif

                    {{ __('Prije nastavka provjerite email kako biste potvrdili Vašu email adresu.') }}
                    {{ __('Ako niste zaprimili email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknite ovdje kako biste zatražili slanje novog') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
