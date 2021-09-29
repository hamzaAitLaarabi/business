<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public function scopeUsr_id($query, $usr_id)
    {
        return $query->where('usr_id', $usr_id)->orderBy('id','desc');
    }
}
