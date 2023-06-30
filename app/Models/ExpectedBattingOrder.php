<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpectedBattingOrder extends Model
{
    protected $table = 'expected_batting_order';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'expectation_id',
        'game_detail_id',
        'mst_members_id',
        'member_posistion',
        'batting_order',
    ];    
}
