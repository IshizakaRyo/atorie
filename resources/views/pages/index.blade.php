@extends('layouts.layout')

@section('title','カラオケ')

@section('content')
<h1>TOPページ</h1>
<p>This is TOP page.</p>

    <ul>
    @foreach ($datas as $data)
        <li>
            <div style="display: flex">
                <p>{{ $data[0] }}</p><p style="margin-left: 30px">{{ $data[1] }}</p>
            </div>
        </li>
    @endforeach
    </ul>
@endsection