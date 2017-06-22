{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <?php
        $sidebar_title = PageBuilder::block('sidebar_title');
        $sidebar_content = PageBuilder::block('sidebar_content');
        ?>

        <div class="row">
            <div class="{{ ($sidebar_title || $sidebar_content)?'col-sm-8':'col-sm-12' }}">
                <h1>{!! PageBuilder::block('title') !!}</h1>
                <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
                {!! PageBuilder::block('content') !!}
                {!! PageBuilder::block('video') !!}
            </div>
            @if ($sidebar_title || $sidebar_content)
            <div class="col-sm-4">
                <h2>{!! $sidebar_title !!}</h2>
                {!! $sidebar_content !!}
            </div>
            @endif
        </div>

    </div>
</section>

{!! PageBuilder::section('footer') !!}