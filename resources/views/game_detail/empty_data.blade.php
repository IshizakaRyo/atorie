@extends('layouts.layout')

@section('title','atorie - game_detail')

@section('content')
<h1>スターティングラインナップ予想一覧</h1>
<h2>{{ $game_option['dating'] }} ({{ $game_option['day_of_week'] }})</h2>
<h2>VS{{ $game_option['opponent_team']['name'] }} in {{ $game_option['place'] }}</h2>
<?php 
    $date_key = str_replace('-', '', $game_option['dating']);
?>
    <section>        
        <div class="">
            <p>登録されているデータがまだ存在しません。</p>
            <p>ぜひ自分のオーダーを登録しよう！！</p>
            <a href={{ route('baseball.game_detail.create', ['dating' => $date_key]) }}>作成する</a>
        </div>
    </section>
@endsection