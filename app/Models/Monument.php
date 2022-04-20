<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monument extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('withWkt', function (Builder $builder) {
            $builder->addSelect(['id', 'name', 'image', 'created_at', 'updated_at']);
            $builder->addSelect(DB::raw('ST_AsText(geom) as wkt'));
        });
    }
}
