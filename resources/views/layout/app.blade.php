<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/styles/hybrid.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>
    <title>@yield('title-block')</title>
</head>
<body>
<div id="app">
        <header>
            @include('inc.header')
        </header>
        <main>
        	@yield('content')
        </main>
    </div>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
