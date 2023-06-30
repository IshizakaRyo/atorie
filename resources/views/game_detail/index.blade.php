@extends('layouts.layout')

@section('title','atorie - game_detail')

@section('content')
<h1>{{ $game_option['dating'] }} ({{ $game_option['day_of_week'] }})</h1>
<h2>VS{{ $game_option['opponent_team']['name'] }}</h2>
<h2>{{ $game_option['place'] }}</h2>
<h1>GAME DTAIL</h1>
<p>4/1(金) 18:00~のページ</p>
<?php 
    $date_key = str_replace('-', '', $game_option['dating']);
?>
<a href={{ route('baseball.game_detail.create', $date_key) }}>作成する</a>
    <section>
        @foreach ($expected_order_array as $expected_order)
        <div class="order-box" style="margin-bottom: 100px">
            <a href="" style="text-decoration:none; color: black">
                <div>
                    <p>プラトン さんのオーダー</p>
                    <table>
                        @foreach ($order_table_items as $order_num => $order_num_alpha)
                            @if ($order_num === 10)
                            <tr class="orderRecord">
                                <td class="orderNum">{{ $expected_order[$order_num_alpha]['position'] }}</td>
                                <td class="memberName">{{ $expected_order[$order_num_alpha]['member_name'] }}</td>
                                <td class="memberPostion" style="color: white">1</td>
                            </tr>           
                            @else
                            <tr class="orderRecord">
                                <td class="orderNum">{{ $order_num }}</td>
                                <td class="memberName">{{ $expected_order[$order_num_alpha]['member_name'] }}</td>
                                <td class="memberPostion">{{ $expected_order[$order_num_alpha]['position'] }}</td>
                            </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </a>
        </div>
        @endforeach
    </section>
@endsection