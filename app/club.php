<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class club extends Model
{
    protected $fillable = ['name', 'wins', 'draws', 'losses', 'points', 'goalsFor', 'goalsAgainst', 'matchesPlayed'];
}
