@if ($crumb->active)
    <li class="active">{{ $crumb->name }}</li>
@else
    <li>{!! HTML::link($crumb->url, $crumb->name) !!}</li>
@endif