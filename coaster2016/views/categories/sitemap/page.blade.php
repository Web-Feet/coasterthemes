<li>
    <a href="{!! URL::to(PageBuilder::page_url()) !!}">{{ PageBuilder::page_full_name() }}</a>
    {!! PageBuilder::category(['view' => 'sitemap', 'sitemap' => true]) !!}
</li>