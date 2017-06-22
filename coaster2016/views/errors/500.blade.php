{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">
            <div class="col-sm-12">
                <h1>Error: 500</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                @if(env('APP_DEBUG'))
                    <p class="errorpage_1">{!! $error !!}</p>
                    <p>{{ 'Line ' . $e->getLine() . ' in ' . $e->getFile() }}</p>

                    @if ($e->getLine())
                    <pre class="text-danger">{{ file($e->getFile())[$e->getLine()-1] }}</pre>
                    @endif
                    <p>&nbsp;</p>

                    <p>Full Trace:</p>
                    <p>{!! nl2br($e->getTraceAsString()) !!}</p>
                @else
                    {{ 'oops, something went wrong ...' }}
                @endif
            </div>
        </div>

    </div>
</section>

{!! PageBuilder::section('footer') !!}