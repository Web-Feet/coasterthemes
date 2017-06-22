@if ($is_first || $count % 4 == 1)
<section class="socialmedia">
    <div class="container">
        <div class="row text-center">
@endif

            <div class="col-sm-3">
                <p>
                    <a href="{{ PageBuilder::block('social_link') }}">
                        {!! PageBuilder::block('social_icon') !!} &nbsp; {{ PageBuilder::block('social_name') }}
                    </a>
                </p>
            </div>

@if ($is_last || $count % 4 == 0)
        </div>
    </div>
</section>
@endif