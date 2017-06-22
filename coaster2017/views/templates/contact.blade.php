{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">
            <div class="col-sm-12">
                <h1>{!! PageBuilder::block('title') !!}</h1>
                <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
                {!! PageBuilder::block('content') !!}
            </div>
        </div>

        <?php
        $contact = [
            'email' => PageBuilder::block('email'),
            'phone' => PageBuilder::block('phone'),
            'address' => PageBuilder::block('address')
        ];
        $columns = count(array_filter($contact));
        $columns = $columns?12/$columns:12;
        ?>

        <div class="row contactdetailsrow">
            @if ($contact['email'])
            <div class="col-sm-{{ $columns }}">
                <p><span class="fa fa-envelope" aria-hidden="true"></span></p>
                <h3>{!! $contact['email'] !!}</h3>
            </div>
            @endif
            @if ($contact['phone'])
            <div class="col-sm-{{ $columns }}">
                <p><span class="fa fa-mobile" aria-hidden="true"></span></p>
                <h3>{!! $contact['phone'] !!}</h3>
            </div>
            @endif
            @if ($contact['address'])
            <div class="col-sm-{{ $columns }}">
                <p><span class="fa fa-map-marker" aria-hidden="true"></span></p>
                <h3>{!! $contact['address'] !!}</h3>
            </div>
            @endif
        </div>

        {!! PageBuilder::block('contact_form') !!}

        <?php $map = PageBuilder::block('map_link'); ?>

        @if ($map)
        <div class="row">
            <div class="col-sm-12">
                <iframe src="{{ $map }}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
        @endif

    </div>
</section>

{!! PageBuilder::section('footer') !!}