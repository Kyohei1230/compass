<x-app-layout>
    <x-slot name="header">
        edit
    </x-slot>
        <h1>キャンパスコンパス</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="shop_name">
                <h2>店名</h2>
                <input type="text" name="post[shop_name]" placeholder="店名" value={{ $post->shop_name }}>
                <p class="shop_name__error" style="color:red">{{ $errors->first('post.shop_name') }}</p>
            </div>
            <div class="prefecture">
                <h2>都道府県</h2>
                <input type="text" name="post[prefecture]" placeholder="都道府県" value={{ $post->prefecture }}>
            </div>
            <div class="city">
                <h2>市</h2>
                <input type="text" name="post[city]" placeholder="市" value={{ $post->city }}>
            </div>
            <div class="after_address">
                <h2>区</h2>
                <input type="text" name="post[after_address]" placeholder="区" value={{ $post->after_address }}>
            </div>
            <div class="zip_code">
                <h2>郵便番号</h2>
                <input type="text" name="post[zip_code]" placeholder="郵便番号" value={{ $post->zip_code }}>
                <p class="zip_code__error" style="color:red">{{ $errors->first('post.zip_code') }}</p>
            </div>
            <div class="phone_number">
                <h2>電話番号</h2>
                <input type="text" name="post[phone_number]" placeholder="電話番号" value={{ $post->phone_number }}>
                <p class="phone_number__error" style="color:red">{{ $errors->first('post.phone_number') }}</p>
            </div>
            <div class="opening_hours">
                <h2>営業時間</h2>
                <input type="text" name="post[opening_hours]" placeholder="営業時間" value={{ $post->opening_hours }}>
            </div>
            <div class="distance">
                <h2>大学からの距離</h2>
                <input type="text" name="post[distance]" placeholder="大学からの距離" value={{ $post->distance }}>
            </div>
            <div class="required_time">
                <h2>必要時間</h2>
                <input type="text" name="post[required_time]" placeholder="大学からかかる時間" value={{ $post->required_time }}>
            </div>
            <div class="body">
                <h2>詳細</h2>
                <textarea name="post[body]" placeholder="おすすめ理由" value={{ $post->body }}></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>