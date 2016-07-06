<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Club extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to' => 'slug',
        'unique' => true,
        'on_update' => true,
    );

    protected $fillable = [
        'name',
        'user_id',
        'status',
        'slug',
        'desc',
        'university_id',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
