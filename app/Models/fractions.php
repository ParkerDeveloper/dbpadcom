<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fractions extends Model
{
    use HasFactory;

	protected $fillable = ['rank_name'];

	public function fraction() 
	{
		return $this->belongsTo('App\Models\User', 'id', 'rank');
	}
}
