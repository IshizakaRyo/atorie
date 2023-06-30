<?php

namespace App\Services;

use App\Models\MstMember;
use App\Models\ExpectedPosition;
use App\Models\ExpectedBattingOrder;
use App\Models\GameDetail;

class GameDetailStoreService
{
    public function store($request_param)
    {
        $expectation_id = $request_param['dating_only_num'].uniqid();

        $batting_order = $request_param['batting_order'];
        $expected_batting_order = new ExpectedBattingOrder();
        foreach ($batting_order as $batting_order_alpha => $member_name) {
            if ($batting_order_alpha === 'pitchar') {
                continue;
            }
            $expected_batting_order->$batting_order_alpha = $member_name;
        }
        $expected_batting_order->game_detail_id = $request_param['game_detail_id'];
        $expected_batting_order->expectation_id = $expectation_id;
        $expected_batting_order->user_name = $request_param['user_name'];
        $expected_batting_order->save();

        $positions = $request_param['positions'];
        $expected_position = new ExpectedPosition();
        foreach ($positions as $batting_order_alpha => $position) {
            $expected_position->$position = $request_param['batting_order'][$batting_order_alpha];
        }
        $expected_position->game_detail_id = $request_param['game_detail_id'];
        $expected_position->expectation_id = $expectation_id;
        $expected_position->save();

        return true;
    }
}