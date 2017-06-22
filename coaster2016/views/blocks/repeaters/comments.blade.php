@if ($is_first)
<div class="row">

    <div class="col-sm-12">
        <h3>Comments:</h3>
    </div>

@endif

        <div class="col-sm-12 well">

            <h4>{!! PageBuilder::block('comment_author') !!}</h4>

            <p>{{ PageBuilder::block('comment_content') }}</p>

            <p><i>{!! PageBuilder::block('comment_date', ['format' => 'jS F Y']) !!}</i></p>

        </div>

@if ($is_last)
</div>
@endif