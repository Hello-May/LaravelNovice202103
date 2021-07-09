<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fungus;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email'];
    protected $hidden = ['password'];

    public function hungus()
    {
        return $this->hasOne(Fungus::class);
    }
}
