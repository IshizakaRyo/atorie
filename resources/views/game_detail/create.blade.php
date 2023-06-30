@extends('layouts.layout')

@section('title','atorie - game_detail')

@section('content')
{{-- <h1>{{ $gameOption['date'] }} ({{ $gameOption['dayName'] }})</h1>
<h2>VS{{ $gameOption['opponent'] }}</h2>
<h2>{{ $gameOption['place'] }}</h2> --}}
@php($positions = ["捕", "一", "二", "三", "遊", "左", "中", "右", "指"])
<h1>ORDER CREATE</h1>
<p>4/1(金) 18:00~のオーダー作成ページ</p>
    <section>
        <div>
            <form method="POST" action="{{route('baseball.game_detail.store')}}">
                @csrf
                {{-- @for ($battingNum = 1; $battingNum <= 9; $battingNum++)
                    <div>
                        <p style="display: inline-block; width: 20px">{{ $battingNum }}</p>
                        <select name="batting_order[{{ $battingNum }}]" id="">
                            @foreach ($members as $member)
                                <option value={{ $member['id'] }}>{{ $member['member_name'] }}  #{{ $member['back_number'] }}</option>
                            @endforeach
                        </select>

                        <select name="positions[{{ $battingNum }}]">
                        @foreach ($positions as $position)
                            <option value="{{ $position }}">{{ $position }}</option>
                        @endforeach
                        </select>
                    </div>
                @endfor --}}

                <div>
                    <p style="display: inline-block; width: 20px">1</p>
                    <select name="batting_order['first_hitter']" id="">
                        <option value="29">大城 滉二  #10</option>
                    </select>
                    <select name="positions['first_hitter']">
                        <option value="shortstop">遊</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">2</p>
                    <select name="batting_order['secound_hitter']" id="">
                        <option value="22">安達 了一  #3</option>
                    </select>
                    <select name="positions['secound_hitter']">
                        <option value="secound_baseman">二</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">3</p>
                    <select name="batting_order['third_hitter']" id="">
                        <option value="39">来田 涼斗  #38</option>
                    </select>
                    <select name="positions['third_hitter']">
                        <option value="right_fielder">二</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">4</p>
                    <select name="batting_order['fourth_hitter']" id="">
                        <option value="33">野口 智哉  #9</option>
                    </select>
                    <select name="positions['fourth_hitter']">
                        <option value="center_fielder">中</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">5</p>
                    <select name="batting_order['fifth_hitter']" id="">
                        <option value="15">若月 健矢  #2</option>
                    </select>
                    <select name="positions['fifth_hitter']">
                        <option value="center_fielder">捕</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">6</p>
                    <select name="batting_order['sixth_hitter']" id="">
                        <option value="32">ゴンザレス  #8</option>
                    </select>
                    <select name="positions['sixth_hitter']">
                        <option value="third_baseman">三</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">7</p>
                    <select name="batting_order['seventh_hitter']" id="">
                        <option value="38">杉澤 龍  #33</option>
                    </select>
                    <select name="positions['seventh_hitter']">
                        <option value="designated_hitter">DH</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">8</p>
                    <select name="batting_order['eight_hitter']" id="">
                        <option value="23">石岡 諒太  #00</option>
                    </select>
                    <select name="positions['eight_hitter']">
                        <option value="first_baseman">一</option>
                    </select>
                </div>
                <div>
                    <p style="display: inline-block; width: 20px">9</p>
                    <select name="batting_order['ninth_hitter']" id="">
                        <option value="36">福田 周平  #1</option>
                    </select>
                    <select name="positions['ninth_hitter']">
                        <option value="left_fielder">左</option>
                    </select>
                </div>

                {{-- <div>
                    <p style="display:inline-block; width: 20px">投</p>
                    <select name="batting_order[10]">
                        @foreach ($members as $member)
                        <option value="{{ $member['id'] }}">{{ $member['member_name'] }}  #{{ $member['back_number'] }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div>
                    <p style="display:inline-block; width: 20px">投</p>
                    <select name="positions['pitchar']">
                        <option value="pitchar">宮城 大弥  #13</option>
                    </select>
                    <input type="hidden" name="batting_order['pitchar']" value="5">
                </div>
                <input type="submit" value="作成">
            </form>
        </div>
    </section>
@endsection