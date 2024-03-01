<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'date',
        'myTeam',
        'opppsitionTeam',
        'venue',
        'match_type',
        'type_ball',
        'tournament',
        'custom_match_type',
        'select_role',
        'match_result',
        'batting_pos',
        'runs',
        'tbs',
        'no4s',
        'no6s',
        'overs_bowled',
        'runGiven',
        'extras',
        'nomo',
        'wicket_taken',
        'norsif',
        'noc',
        'norouts',
        'nostump',
        'rgbmis',
        'cmissed',
        'stump_missed',
        'runouts',
        'award',
        'select1',
        'select2',
        'fielding_pos',
        'cover',
    ];
 
    public function images(){
        return $this->hasMany(Image::class);
    }
}
