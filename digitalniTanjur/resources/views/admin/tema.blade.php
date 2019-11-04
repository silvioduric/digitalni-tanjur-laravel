@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upravljanje postavkama fonta</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>Promjena veličine fonta</h3>

                    Odaberite željenu veličinu fonta:
                    <br>
                    <font size="2"><a href="javascript:window.location.href=window.location.href" onclick="changemysize(16);">Veličina 16px</a></font><br>
                    <font size="4"><a href="javascript:window.location.href=window.location.href" onclick="changemysize(20);">Veličina 20px</a></font><br>
                    <font size="5"><a href="javascript:window.location.href=window.location.href" onclick="changemysize(25);">Veličina 25px</a></font><br>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Upravljanje postavkama boje</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>Promjena boje pozadine</h3>

                    Odaberite željenu boju pozadine:
                    <br>
                    <font size="4"><a href="javascript:window.location.href=window.location.href" onclick="changemycolor('yellow');">Žuta</a></font><br>
                    <font size="4"><a href="javascript:window.location.href=window.location.href" onclick="changemycolor('gray');">Siva</a></font><br>
                    <font size="4"><a href="javascript:window.location.href=window.location.href" onclick="changemycolor('lightblue');">Svijetlo plava</a></font><br>
                    <font size="4"><a href="javascript:window.location.href=window.location.href" onclick="changemycolor('white');">Bijela</a></font><br>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection