<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'user_id',
    ];

    public function getRouteKeyName(){
        return "slug";
    }

    // Relación muchos a muchos inversa con Usuarios
    public function user(){
        return $this->belongsTo(User::class)->withTimestamp();
    }

}
