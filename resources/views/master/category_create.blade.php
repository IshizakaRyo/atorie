@extends('layouts.layout')

@section('title','atorie - HOME')

@section('content')
<h1>TOPページ</h1>
<p>This is cateiry admin page.</p>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <div class="errror">
            @if ($errors->has('category_code'))
                @foreach($errors->get('category_code') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="category_code">カテゴリコード</label>
            <input type="text" name="category_code">
        </div>

        <div class="errror">
            @if ($errors->has('category_name'))
                @foreach($errors->get('category_name') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="category_name">カテゴリ名</label>
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

    <div>
        <a href={{ route('master.index') }}>マスタ一覧へ</a>
    </div>
@endsection