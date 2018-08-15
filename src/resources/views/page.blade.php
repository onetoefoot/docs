@extends('docs::app')

@section('title', $title)

@section('content')

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                here
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                {!! $content !!}
            </main>
        </div>
    </div>  

@endsection