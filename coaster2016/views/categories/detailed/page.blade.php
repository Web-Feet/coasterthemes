<div class="col-sm-4">
    <h3><a href="{!! $page->url !!}">{!! $page->name !!}</a></h3>
    <p>{{ PageBuilder::block('content', ['length' => 200]) }}</p>
</div>