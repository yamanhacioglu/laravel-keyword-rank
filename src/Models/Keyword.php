<?php
namespace Northlab\KeywordRank\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
	protected $fillable = [
        'keyword',
        'url',
        'user_id',
        'website_id'
    ];

    public function website() {
        return $this->belongsTo('Northlab\KeywordRank\Models\Website');
    }

    public function rankings() {
        return $this->hasMany('Northlab\KeywordRank\Models\Ranking');
    }
}