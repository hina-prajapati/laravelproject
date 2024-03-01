<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email',  'datebirth', 'age', 'select1', 'select2', 'state', 'city', 'bowling_orientation', 'batting_orientation', 'cover', 'file'
    ];


    public function photos()
{
    return $this->hasMany(Photo::class);
}
// Inside Profile.php
public function country()
{
    return $this->belongsTo(Country::class, 'country_id');
}


public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
public function city()
{
    return $this->belongsTo(City::class, 'city_id');
}
}
