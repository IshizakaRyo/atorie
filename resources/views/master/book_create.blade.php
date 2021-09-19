@extends('layouts.layout')

@section('title','atorie - HOME')

@section('content')
<h1>TOPページ</h1>
<p>This is TOP page.</p>

    <form action="{{ route('book.store') }}" method="POST" enctype='multipart/form-data'>
        @csrf

        <div class="errror">
            @if ($errors->has('title'))
                @foreach($errors->get('title') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title">
        </div>

        <div class="errror">
            @if ($errors->has('author'))
                @foreach($errors->get('author') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="author">著者</label>
            <input type="text" name="author">
        </div>

        <div class="errror">
            @if ($errors->has('publisher'))
                @foreach($errors->get('publisher') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="publisher">出版社</label>
            <input type="text" name="publisher">
        </div>

        <div class="errror">
            @if ($errors->has('category_id'))
                @foreach($errors->get('category_id') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="category_id">カテゴリ</label>
            <select name="category_id">
            @foreach ($categories as $category)
                    <option value={{ $category['id'] }}>{{ $category['category_name'] }}</option>
                
            @endforeach
            </select>
            <div>
        </div>

        <div class="errror">
            @if ($errors->has('readed_date'))
                @foreach($errors->get('readed_date') as $message)
                    <li> {{ $message }} </li>
                @endforeach
            @endif
        </div>
        <div>
            <label for="readed_date">読んだ日</label>
            <input id="today" type="date" name="readed_date">
        </div>
        <div>
            <label for="image">画像</label>
            <input id="image" type="file" name="image" accept="image/*"/><br /><br />
            <img id="preview" width="130px">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <section>
        <ul>
            @foreach ($datas as $data)
            <li><a>{{ $data['title'] }}</a>  <a>{{ $data['author'] }}</a>  <a>{{ $data['publisher'] }}</a>
                <p>{{ asset('public/storage/temp/'.$data['image']) }}</p>
                <img width="100px" src={{ asset('public/storage/temp/'.$data['image']) }}/>
            </li>
            @endforeach
        </ul>
    </section>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div>
        <a href={{ route('master.index') }}>マスタ一覧へ</a>
        <p>{{ asset('/css/style.css') }}</p>
        <p>{{ asset('/js/book.js') }}</p>
    </div>
    <script src="{{ asset('/js/book.js') }}"></script>
@endsection