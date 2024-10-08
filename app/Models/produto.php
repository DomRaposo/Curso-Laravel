<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public function user() {
        return $this->belongsTo(User::class,'id_user');
    }

}
