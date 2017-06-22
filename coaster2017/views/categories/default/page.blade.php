<?php
// Vertical listing (down then right)
$cols = 3;
$new_col_on_count = array_map(function($v) use($total, $cols) { return ceil($v*$total/$cols); }, range(1,$cols));
?>

@if ($is_first || in_array($count-1, $new_col_on_count))
    <div class="col-sm-4">
        <ul>
            @endif
            <li><a href="{!! $page->url !!}">{!! $page->name !!}</a></li>
            @if ($is_last || in_array($count, $new_col_on_count))
        </ul>
    </div>
@endif