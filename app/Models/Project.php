<?php

namespace App\Models;

use App\Traits\GetterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SluggableTrait;

class Project extends Model
{
    use HasFactory, SluggableTrait, GetterTrait;

    protected $guarded = ['id'];

    private static $sluggableConfig = [
        'slug_column' => 'slug',
        'slug_from' => 'name'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
