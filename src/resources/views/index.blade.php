@extends('docs::app')

@section('content')

<docs-main class="main-docs">
    <docs-header class="header-docs">
        <h1>Documentation</h1>
        <p>Documentation for packages</p>
    </docs-header>

    <docs-main class="main-docs">

        <div class="grid">
            <div class="grid_col -width-2/3">
                <article class="article">

                    <h5><a href="/docs/tasks">Tasks</a></h5>
                    <p>tasks</p>

                    <h5><a href="/docs/docs">Docs</a></h5>
                    <p>docs</p>

                    <h5><a href="/docs/sampleidentifier">SampleIdentifier</a></h5>
                    <p>sampleidentifier</p>

                </article>
            </div>
        </div>

    </docs-main>

    <docs-footer class="footer-docs">
    </docs-footer>
</docs-main>

@endsection