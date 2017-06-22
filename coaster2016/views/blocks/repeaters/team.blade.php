@if ($count % 3 == 1)
    <div class="row text-center meetrow">
@endif

        <div class="col-sm-4">
            {!! PageBuilder::block('member_image', ['class' => 'img-responsive img-inline']) !!}
            <h3>{!! PageBuilder::block('member_name') !!}</h3>
            <p>{!! PageBuilder::block('member_text') !!}</p>
        </div>

@if ($is_last || $count % 3 == 0)
    </div>
@endif

