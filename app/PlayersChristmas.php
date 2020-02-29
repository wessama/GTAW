<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayersChristmas extends Model
{
	public function scopeNotHalloween($query)
	{
		return $query->select('*')->whereNotIn('name', function($query){
			$query->select('name')->from('players_halloweens');
		})->orderBy('created_at', 'DESC');
	}
}
