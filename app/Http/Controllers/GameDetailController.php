<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MstMember;
use App\Models\ExpectedPosition;
use App\Models\ExpectedBattingOrder;
use App\Services\GameDetailService;
use App\Services\GameDetailStoreService;
use Illuminate\Support\Facades\DB;

class GameDetailController extends Controller
{
    public function index(Request $request) 
    {
        $expected_position = new ExpectedPosition();
        $mst_member = new MstMember();
        $expected_batting_order = new ExpectedBattingOrder();

        $service = new GameDetailService();

        $order_table_items = [
            1 => 'first_hitter',
            2 => 'secound_hitter',
            3 => 'third_hitter',
            4 => 'fourth_hitter',
            5 => 'fifth_hitter',
            6 => 'sixth_hitter',
            7 => 'seventh_hitter',
            8 => 'eight_hitter',
            9 => 'ninth_hitter',
            10 => 'pitchar',
        ];

        // 試合詳細の取得
        $date = $request->date;
        $game_option = $service->getGameDetailArray($date);
        // 予想オーダーの取得
        $expected_order_array = $service->getExpectedOrderArray();
                
        $gameOption = [
            'date' =>  "04/01",
            "dayName" => "金", 
            "startTime" => "18:00",
            "place" => "京セラドーム",
            "opponent" => "楽天",
        ];

        return view('game_detail.index', compact('order_table_items', 'game_option', 'expected_order_array'));
    }

    public function create(Request $request) 
    {
        $mst_member = new MstMember();
        $members = $mst_member->get(['id', 'member_name', 'back_number'])->toArray();

        return view('game_detail.create', compact('members'));
    }

    public function store(Request $request) 
    {
        $service = new GameDetailStoreService();
        $result = $service->store($request->all());
        dd($request->all());
        return view('game_detail.create');
    }
}
