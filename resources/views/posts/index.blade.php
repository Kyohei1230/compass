<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Campus Compass</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>キャンパスコンパス</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='shop_name'>{{ $post->shop_name }}</h2>
                    <a href="/posts/{{ $post->id }}">{{ $post->shop_name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                    <a href='/posts/create'>create</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>