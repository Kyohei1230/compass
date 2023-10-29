<x-app-layout>
    <x-slot name="header">
        show
    </x-slot>
        <h1 class="shop_name">
            {{ $post->shop_name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>都道府県</h3>
                <p>{{ $post->prefecture }}</p>
            </div>
            
            <div class="content__post">
                <h3>市</h3>
                <p>{{ $post->city }}</p>
            </div>
            
            <div class="content__post">
                <h3>区</h3>
                <p>{{ $post->after_address }}</p>
            </div>
            
            <div class="content__post">
                <h3>郵便番号</h3>
                <p>{{ $post->zip_code }}</p>
            </div>
            
            <div class="content__post">
                <h3>電話番号</h3>
                <p>{{ $post->phone_number }}</p>
            </div>
            
            <div class="content__post">
                <h3>営業時間</h3>
                <p>{{ $post->opening_hours }}</p>
            </div>
            
            <div class="content__post">
                <h3>大学からの距離</h3>
                <p>{{ $post->distance }}</p>
            </div>
            
            <div class="content__post">
                <h3>大学からの時間</h3>
                <p>{{ $post->required_time }}</p>
            </div>
            
            <div class="content__post">
                <h3>おすすめ理由</h3>
                <p>{{ $post->body }}</p>    
            </div>
            
            <div class="content__post">
                <h3>カテゴリー</h3>
                <p>{{ $post->category_id }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
</x-app-layout>