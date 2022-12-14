<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        'user_id',
    ];
//CONFIGURANDO RELACIONAMENTO DO POST COM USER PARA RECEBER O ID DO USERS
    public function user() {
        return $this->belongsTo(User::class);
    }
}
