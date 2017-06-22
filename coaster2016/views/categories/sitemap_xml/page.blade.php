<url>
    <loc>{!! URL::to(PageBuilder::page_url()) !!}</loc>
    <priority>{!! (!trim($page->url, '/'))?'1':'0.5' !!}</priority>
</url>
{!! PageBuilder::category(['view' => 'sitemap_xml', 'sitemap' => true]) !!}