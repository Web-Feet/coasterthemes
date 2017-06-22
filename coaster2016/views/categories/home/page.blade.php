<div class="col-sm-3">
    {!! PageBuilder::block('icon') !!}
    <h3>{{ PageBuilder::block('title') }}</h3>
    <p>{{ PageBuilder::block('content', ['length' => 150]) }}</p>
    <a href="{!! $page->url !!}" class="btn btn-default">More info</a>
</div>