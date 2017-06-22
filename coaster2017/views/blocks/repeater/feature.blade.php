@if ($is_first || $count % 3 == 1)
<div class="row">
@endif

    <div class="col-sm-4">
        {!! PageBuilder::block('feature_icon') !!}

        <h3>{{ PageBuilder::block('feature_title') }}</h3>
        <p>{{ PageBuilder::block('feature_text') }}</p>
    </div>

@if ($is_last || $count % 3 == 0)
</div>
@endif

