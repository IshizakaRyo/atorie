@extends('layouts.layout')

@section('title','atorie - dashbord')

@section('content')
<h1>GAMES</h1>
<p>オーダー一覧のページ</p>
    <section>
        @foreach ($game_detail_array as $game_detail)
            <?php $linkDate =  str_replace('-', '', $game_detail['dating']);?>

            <a href="{{ route('baseball.game_detail', ['date' => $linkDate]) }}">
            {{-- <a href=""> --}}
                <h3>{{ $game_detail['dating'] }} ({{ $game_detail['day_of_week'] }}) {{ $game_detail['start_time'] }}のページ</h3>
                <p>{{ $game_detail['place'] }}</p>
                <p>オリックス vs {{ $game_detail['opponent_team']['name'] }}</p>
            </a>
        @endforeach
    </section>
@endsection