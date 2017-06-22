{!! PageBuilder::section('head') !!}

{!! PageBuilder::block('carousel') !!}

<section id="sec1">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>{{ PageBuilder::block('title') }}</h2>
                <p class="lead">{{ PageBuilder::block('lead_text') }}</p>
            </div>
        </div>
        <hr />
        @if ($pageId = PageBuilder::block_selectpage('show_sub_pages'))
        {!! PageBuilder::category(['page_id' => $pageId, 'view' => 'home', 'limit' => 4]) !!}
        @endif
    </div>
</section>

{!! PageBuilder::block('banner') !!}

{!! PageBuilder::section('footer') !!}
