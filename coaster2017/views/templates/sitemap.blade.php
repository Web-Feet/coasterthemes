{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">
            <div class="col-sm-12">
                <h1>{!! PageBuilder::block('title') !!}</h1>
                {!! PageBuilder::sitemap(['view' => 'sitemap']) !!}
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

{!! PageBuilder::section('footer') !!}


