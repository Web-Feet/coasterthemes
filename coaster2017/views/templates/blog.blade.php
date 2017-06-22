{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">

            <div class="col-sm-9">

                <h1>{!! PageBuilder::block('title') !!}</h1>
                <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
                {!! PageBuilder::block('content') !!}

                <?php $pages = PageBuilder::category(['view' => PageBuilder::block('category_view')]) ?>
                @if ($pages)
                    {!! $pages !!}
                @else
                    <div class="row">
                        <div class="col-sm-12">
                            <p>&nbsp;</p>
                            <p>No posts found.</p>
                        </div>
                    </div>
                @endif

            </div>

            <div class="col-sm-3">
                {!! PageBuilder::section('blog-bar') !!}
            </div>

        </div>

    </div>
    <!-- /.container -->
</section>

{!! PageBuilder::section('footer') !!}