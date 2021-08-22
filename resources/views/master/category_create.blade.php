@extends('layouts.layout')

@section('title','atorie - HOME')

@section('content')
<h1>TOPページ</h1>
<p>This is cateiry admin page.</p>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div>
            <label for="category_code">カテゴリコード</label>
            <input type="text" name="category_code">
        </div>
        <div>
            <label for="category_name">カテゴリネーム</label>
            <input type="text" name="category_name">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <section>
        <ul>
            @foreach ($categories as $data)
            <li><a>{{ $data['category_code'] }}</a>  <a>{{ $data['category_name'] }}</a></li>
            @endforeach
        </ul>
    </section>

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <a href={{ route('master.index') }}>マスタ一覧へ</a>
    </div>
@endsection