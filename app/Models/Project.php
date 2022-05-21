<?php

namespace App\Models;

use App\Traits\GetterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SluggableTrait;
use Carbon\Carbon;

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

    public function scopeFilter($query)
    {
        $query->when(request()->has('newest'), function ($q)
        {
            $q->whereDate('created_at', '>=', Carbon::now()->subDays(7));
        })->when(request()->has('expired'), function ($q)
        {
            $q->whereNotNull('end_date')->whereDate('end_date', '<', today());
        });
    }
}
