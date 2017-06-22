{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">
            <div class="col-sm-12">
                <h1>{!! PageBuilder::block('title') !!}</h1>
                <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
                {!! PageBuilder::block('content') !!}
            </div>
        </div>

        <?php $view = PageBuilder::block('category_view'); $pages = PageBuilder::category(['view' => PageBuilder::block('category_view'), 'per_page' => (!$view||$view=='default')?50:20]); ?>
        @if ($pages)
            {!! $pages !!}
        @else
            <div class="row">
                <div class="col-sm-12">
                    <p>&nbsp;</p>
                    <p>No pages found</p>
                </div>
            </div>
        @endif

    </div>
    <!-- /.container -->
</section>

{!! PageBuilder::section('footer') !!}
