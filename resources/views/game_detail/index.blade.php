@extends('layouts.layout')

@section('title','atorie - game_detail')

@section('content')
<h1>スターティングラインナップ予想一覧</h1>
<h2>{{ $game_option['dating'] }} ({{ $game_option['day_of_week'] }})</h2>
<h2>VS{{ $game_option['opponent_team']['name'] }} in {{ $game_option['place'] }}</h2>
<?php 
    $date_key = str_replace('-', '', $game_option['dating']);
?>
<a href={{ route('baseball.game_detail.create', ['dating' => $date_key]) }}>作成する</a>
    <section style="margin-top: 100px">
        @foreach ($expected_order_array as $expected_order)
        <div class="order-box" style="margin-bottom: 80px">
            <a href="" style="text-decoration:none; color: black">
                <div>
                    <p>{{ $expected_order['user_name'] }} さんのオーダー</p>
                    <table>
                        {{-- <th class="orderHead">
                            <td class="orderNum"></td>
                            <td class="memberName"></td>
                            <td class="memberPostion" style="opacity: 0">投</td>
                        </th>  --}}
                        @foreach ($order_table_items as $order_num => $order_num_alpha)
                            @if ($order_num === 10)
                            <tr class="orderRecord" style="border-bottom: double">
                                <td class="orderNum">{{ $expected_order[$order_num_alpha]['position'] }}</td>
                                <td class="memberName">{{ $expected_order[$order_num_alpha]['member_name'] }}</td>
                                <td class="memberPostion" style="color: white">投</td>
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