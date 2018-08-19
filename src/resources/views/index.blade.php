@extends('docs::app')

@section('content')

    <link href="/vendor/docs/css/docs.css" rel="stylesheet">

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="docs-sidebar">

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <h1>{{__('Docs')}}</h1>
            <p>{{__('Documentation about current packages')}}</p>

            @php ($packages = config('docs.packages'))
                @foreach ($packages as $package => $params)
                    <h5><a href="/docs/{{$package}}/{{end($params['versions'])}}/introduction">{{$params['title']}}</a></h5>
                    <p>{{$params['description']}}</p>
            @endforeach
        </div>

    </div>
@endsection