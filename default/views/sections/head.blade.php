<!DOCTYPE html>
<html lang="en">
<head itemscope>
    <meta charset="utf-8">
    <title>{!! PageBuilder::block('meta_title', ['meta' => true]) !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{!! PageBuilder::block('meta_description', ['meta' => true]) !!}">
    <meta name="keywords" content="{!! PageBuilder::block('meta_keywords', ['meta' => true]) !!}">

  	<meta name="revisit-after" content="7 days">

    <link href="{!! PageBuilder::css('bootstrap.min') !!}" rel="stylesheet">
    <link href="{!! PageBuilder::css('style') !!}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Prata|Raleway:400,500,600' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    {!! PageBuilder::block('header_html', ['source' => true]) !!}

</head>

<body>

{!! PageBuilder::menu('main_menu') !!}
