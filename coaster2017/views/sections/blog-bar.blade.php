<div id="blogBar">

    <h3>Search</h3>

    <form id="blogSearch">
        <div class="input-group">
            <input type="text" id="query" placeholder="Search the blog ..." class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" id="blogSearchButton" type="submit"><span class="fa fa-search"></span></button>
            </span>
        </div><!-- /input-group -->
    </form>

    <h3>Categories</h3>

    <ul class="category-detailed">
        <?php
        $categories = PageBuilder::blockData('categories', ['importIgnore' => true, 'returnAll' => true]) ?: [];
        $blogCategoryPage = PageBuilder::pageUrl(PageBuilder::block('blog_category_page'));
        ?>
        @foreach($categories as $link => $category)
            <li><a href="{{ $blogCategoryPage }}?id={{ $link }}">{{ $category }}</a></li>
        @endforeach
    </ul>

    <h3>Archives</h3>

    <ul class="category-detailed">
        <?php $month = (new Carbon\Carbon)->startOfMonth()->modify('+1 month'); $maxArchives = 10; $orStopAt = clone $month; $orStopAt->modify('-3 year'); ?>
        @while($maxArchives > 0 && $month->gt($orStopAt))
            <?php $cloneMonth = clone $month; ?>
            @if (PageBuilder::categoryFilter('post_date', [$month->modify('-1 month'), $cloneMonth], ['render' => false, 'page_id' => PageBuilder::block('blog_main_page'), 'match' => 'in']))
                <li><a href="{!! PageBuilder::pageUrl(PageBuilder::block('blog_archive_page')) !!}?id={{ $month->format('Y-m') }}">{{ $month->format('F Y') }}</a></li>
                <?php $maxArchives--; ?>
            @endif
        @endwhile
    </ul>

</div>
