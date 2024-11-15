<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;

    protected $table='skills';

    public static function search($keyword){
        return $query = Skill::where('name', 'like', "%keyword%")
        -> orWhere('slug', 'like', "%keyword%")
        -> orWhere('percentage', 'like', "%keyword%")
        -> orWhere('created_at', 'like', "%keyword%"); 
    }
}
