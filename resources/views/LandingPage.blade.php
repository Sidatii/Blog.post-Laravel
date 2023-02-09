<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
@include('inc.navbar')
{{--<?php foreach ($posts as $post) : ?>--}}
{{--<div class="container w-[600px] m-auto p-5 text-black">--}}
{{--        <?= $post; ?>--}}
{{--</div>--}}

{{--<?php endforeach; ?>--}}

@include('inc.footer')
</body>
</html>
