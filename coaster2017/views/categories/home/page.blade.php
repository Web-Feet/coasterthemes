<div class="row">

    @if ($count%2 == 1)
        <div class="col-sm-6">
            {!! PageBuilder::block('content_image', ['class' => 'img-responsive']) !!}
        </div>
    @endif


        <div class="col-sm-6">
            <h3>{{ PageBuilder::block('title') }}</h3>
            <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
            <p>{{ PageBuilder::block('content', ['length' => 150]) }}</p>
            <a href="{!! $page->url !!}" class="btn btn-default">More info</a>
        </div>

    @if ($count%2 == 0)
        <div class="col-sm-6">
            {!! PageBuilder::block('content_image', ['class' => 'img-responsive']) !!}
        </div>
    @endif

</div>

@if (!$is_last)
    <hr />
@endif