@extends('layouts.layout')

@section('title','atorie - HOME')

@section('content')
<h1>TOPページ</h1>
<p>This is TOP page.</p>

    <form action="{{ route('record.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="author">著者</label>
            <input type="text" name="author">
        </div>
        <div>
            <label for="publisher">出版社</label>
            <input type="text" name="publisher">
        </div>
        <div>
            <label for="category">カテゴリ</label>
            <input type="text" name="category">
        </div>
        <div>
            <label for="readed_date">読んだ日</label>
            <input type="date" name="readed_date">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <section>
        <ul>
            @foreach ($datas as $data)
            <li><a>{{ $data['title'] }}</a>  <a>{{ $data['author'] }}</a>  <a>{{ $data['publisher'] }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection