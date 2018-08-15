@extends('docs::app')

@section('content')

    @include('docs::style')

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="docs-sidebar">

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <h1>{{__('Docs')}}</h1>
            <p>{{__('Documentation about current packages')}}</p>

            @php ($templates = config('docs.templates'))
                @foreach ($templates as $package => $params)
                    <h5><a href="/docs/{{$package}}">{{$params['title']}}</a></h5>
                    <p>{{$params['description']}}</p>
            @endforeach
        </div>

    </div>
@endsection