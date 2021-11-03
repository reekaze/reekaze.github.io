@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }} </h3>
    <p>{{ $email }}</p>
    <img src="img/{{$image}}" alt={{$name}} width="200" class="img=thumbnail rounded-circle">
@endsection
{{-- Post::create([
    'title'=>'Judul ketiga',
    'category_id'=>'3',
    'slug'=>'judul-ketiga',
    'excerpt'=>'Lorem pertama',
    'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus perferendis veritatis reprehenderit veniam animi aperiam eligendi incidunt repudiandae assumenda non expedita ducimus eum sed, molestias laboriosam ratione quae laborum adipisci, quas fuga architecto! Voluptate iure illo nesciunt fuga amet aperiam ducimus beatae atque autem in architecto, rerum voluptatum facilis recusandae voluptatem nostrum quas asperiores veritatis eius velit. Laudantium doloribus deserunt eligendi at, alias consequatur dolorum. Eaque alias, laborum cumque perferendis porro architecto totam maxime unde, laudantium eos esse optio officia doloremque accusantium amet voluptatem beatae. Minus corrupti consequuntur fugit eveniet dolores a quia rerum alias sunt illo magni aperiam incidunt similique id eum, vero rem totam unde? Officia soluta accusamus modi sunt! Sapiente nulla atque explicabo, doloremque unde neque? Placeat.</p>'
]) --}}

{{-- Category::create([
    'name'=>'personal',
    'slug'=>'personal'
]) --}}