@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="fof">
            <div class="hgroup clear">
                <h1>{{ $code }}</h1>
                <h2>Error !</h2>
            </div>
            <p>For Some Reason The Page Get This Error</p>
            <p><a href="javascript:history.go(-1)">&laquo; Go Back</a> / <a href="{{ route('index') }}">Go Home &raquo;</a></p>
        </section>
    </div>
@endsection