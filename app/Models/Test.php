<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Test extends Model
{
    use HasFactory;

    protected $table = "test";

    protected $fillable = [
      'ID',
      'rank_name_1',
      'rank_name_2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'rank');
    }

    public static function test()
    {
        $test = self::where('rank_name_', '=', 'rank');
        dd($test);
    }
}
