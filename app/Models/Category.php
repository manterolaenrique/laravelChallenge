<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entity;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category'];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
