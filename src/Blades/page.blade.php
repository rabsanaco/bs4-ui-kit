<!doctype html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

@if(! empty($drawer->getHeader()))
{!! $drawer->getHeader()->draw(); !!}
@endif

@if(! empty($drawer->getContent()))
{!! $drawer->getContent()->draw() !!}
@endif

@if(! empty($drawer->getFooter()) )
{!! $drawer->getFooter()->draw() !!}
@endif

@if(! empty($drawer->getSidebar()) )
{!! $drawer->getSidebar()->draw() !!}
@endif

</body>
</html>
