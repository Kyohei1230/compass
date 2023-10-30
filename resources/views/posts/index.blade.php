<x-app-layout>
    <x-slot name="header">
        index
    </x-slot>
    <body>
        <h1>キャンパスコンパス</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.794173651686!2d139.61738887452722!3d35.484636040750615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ea8cdafff25%3A0xe0fca04f23281018!2z56We5aWI5bed5aSn5a2mIOaoqua1nOOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1698560603571!5m2!1sja!2sjp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='shop_name'>店名：{{ $post->shop_name }}</h2>
                    <a href="/posts/{{ $post->id }}">詳細：{{ $post->shop_name }}</a>
                    <p class='body'>おすすめ理由：{{ $post->body }}</p>
                    {{ Auth::user()->name }}
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>