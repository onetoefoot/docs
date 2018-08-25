@extends('docs::app')

@section('title', $title)

@section('content')

    <link href="/vendor/docs/css/docs.css" rel="stylesheet">

    <div class="docs-sidebar-wrapper">

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
            <a id="docs-menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                <i class="fa fa-bars"></i>
            </a>

            {!! $content !!}
        </div>
    </div>

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
<script src="/vendor/docs/js/docs.js"></script>

@endsection