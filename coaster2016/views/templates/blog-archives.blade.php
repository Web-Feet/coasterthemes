{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<?php
$postDates = explode('-', Request::input('id'));
$range = !empty($postDates[1]) ? 'month' : 'year';
$postDates = array_filter($postDates) + [date('Y'), '01'];
try {
    $fromDate = \Carbon\Carbon::createFromFormat('Y-m', implode('-', $postDates))->startOfMonth();
    $toDate = clone $fromDate;
    $toDate->modify('+1 '.$range);
    $pages = PageBuilder::categoryFilter('post_date', [$fromDate, $toDate], ['view' => PageBuilder::block('category_view'), 'match' => 'in', 'renderIfEmpty' => false]);
    $archive = ($range == 'year') ? 'Year ' . $fromDate->format('Y') : $fromDate->format('F Y');
} catch (\Exception $e) {
    $pages = [];
    $archive = 'None';
}
?>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">

            <div class="col-sm-9">

                <h1>{!! PageBuilder::block('title') !!}: {{  $archive ?: 'None' }}</h1>
                <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
                {!! PageBuilder::block('content') !!}

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
