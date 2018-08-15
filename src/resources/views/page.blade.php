@extends('docs::app')

@section('title', $title)

@section('content')

@include('docs::style');

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="docs-sidebar">
            <div class="sidebar-header">
                <h3>{{__('Documentation')}}</h3>
            </div>

            <ul class="list-unstyled components">
                <p>{{ $package['title'] }}</p>

                @foreach ($menu_base as $link => $title)
                    <li>
                        <a href="/docs/{{$package_name}}/{{$version}}/{{$link}}">{{$title}}</a>
                    </li>
                @endforeach

            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            {!! $content !!}
        </div>
    </div>

@endsection