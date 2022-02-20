<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use fraction;
use Cache;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {

        return $this->hasRole('Администратор');
    }

	public function isOnline()
	{
    	return Cache::has('user-is-online-' . $this->id);
	}


	public function ranks()
	{
		return $this->belongsTo('App\Models\fractions', 'rank', 'id');

	}

	public function getRanks()
	{
		if($this->ranks !== null) {
			return $this->ranks->rank_name;
		} else {
			return 'None';
		}
	}

	public function ranks_division()
	{
		return $this->belongsTo('App\Models\divisions_ranks','division_rank');

	}

	public function getRanksDivision()
	{
		if($this->ranks_division !== null) {
			return $this->ranks_division->division_1;
		} else {
            return $this->ranks_division->division_2;
		}
	}
}
