<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisions_ranks extends Model
{
    use HasFactory;

	protected $fillable = [
		'division_1',
        'division_2'
];

	public function division_rank()
	{
		return $this->belongsTo('App\Models\User','id', 'division_'.'division_rank')->first();
	}
}
