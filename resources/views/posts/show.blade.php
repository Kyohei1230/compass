<x-app-layout>
    <x-slot name="header">
        show
    </x-slot>
        <h1 class="shop_name">
            {{ $post->shop_name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>都道府県：{{$post->prefecture}}</h3>
            </div>
            
            <div class="content__post">
                <h3>市：{{ $post->city }}</h3>
            </div>
            
            <div class="content__post">
                <h3>区：{{ $post->after_address }}</h3>
            </div>
            
            <div class="content__post">
                <h3>郵便番号：{{ $post->zip_code }}</h3>
            </div>
            
            <div class="content__post">
                <h3>電話番号：{{ $post->phone_number }}</h3>
            </div>
            
            <div class="content__post">
                <h3>営業時間：{{ $post->opening_hours }}</h3>
            </div>
            
            <div class="content__post">
                <h3>大学からの距離：{{ $post->distance }}</h3>
            </div>
            
            <div class="content__post">
                <h3>大学からの時間：{{ $post->required_time }}</h3>
            </div>
            
            <div class="content__post">
                <h3>おすすめ理由：{{ $post->body }}</h3>
            </div>
            
            <div class="content__post">
                <h3>カテゴリー：{{ $post->category_id }}</h3>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
       
</x-app-layout>