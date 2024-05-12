<?php

namespace Northlab\KeywordRank\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = [
        'keyword_id',
        'rank',
        'rank_date'
    ];

    public function keyword() {
        return $this->belongsTo('Northlab\KeywordRank\Models\Website');
    }
}
