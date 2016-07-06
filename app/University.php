<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class University extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
        'unique'          => true,
        'on_update'       => true,
    );

    protected $fillable = ['name', 'city_id', 'slug', 'desc'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function clubs()
    {
        return $this->hasMany(Club::class);
    }
}
