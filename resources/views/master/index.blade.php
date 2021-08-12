@extends('layouts.layout')

@section('title','atorie - HOME')

@section('content')
<h1>MASTER管理ページ</h1>
<p>data adminisitration page.</p>
    <section>
        <a href="{{ route('record.create') }}">本ページ</a>
    </section>
@endsection