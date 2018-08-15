@extends('docs::app')

@section('title', $title)

@section('content')

@include('docs::style');

    <div class="wrapper">

        <nav id="docs-sidebar">

            <div class="sidebar-header">
                <h3><a href="/docs">{{__('Documentation')}}</a></h3>
            </div>

            <ul class="list-unstyled components">
                <p>{{ $package['title'] }}</p>

                @foreach ($menu_base as $link => $title)
                    <li @if ($page_location == $link) class="active" @endif>
                        <a href="/docs/{{$package_name}}/{{$version}}/{{$link}}">{{$title}}</a>
                    </li>
                @endforeach

                @foreach ($extra_docs as $dir => $files)
                <p>{{ ucwords(str_replace('-', ' ', $dir)) }}
                    @foreach($files as $link) 
                    <li @if ($page_location == $link) class="active" @endif>
                        <a href="/docs/{{$package_name}}/{{$version}}/{{$dir}}/{{$link}}">{{ ucwords(str_replace('-', ' ', $link)) }}</a>
                    </li>
                    @endforeach
                @endforeach

            </ul>

        </nav>

        <div id="content">
            {!! $content !!}
        </div>
    </div>

@endsection