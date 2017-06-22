<div class="col-sm-12">
    <h3 class="clearfix post-title"><a href="{!! $page->url !!}" class="pull-left">{!! $page->name !!}</a><span class="pull-right">{{ PageBuilder::block('post_date', ['format' => 'jS F Y']) }}</span></h3>
    <p>{{ PageBuilder::block('content', ['length' => 400]) }}</p>
    <div class="row">
        <div class="col-sm-3">
        <a href="{!! $page->url !!}" class="btn btn-default">Read More</a>
        </div>
    </div>
</div>