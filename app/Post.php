<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
        'unique'          => true,
        'on_update'       => true,
    );
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'desc',
        'content',
        'image',
        'status',
        'views',
        'club_id',
        'user_id',
        'approved_id',
        'event_start',
        'event_end',
        'external_link'
    ];

    protected $dates = ['created_at', 'updated_at', 'event_start', 'event_end'];

    /**
     * post belong to one category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopePublish($query)
    {
        $query->where('status', true);
    }
    
    public function author()
    {
        if ($this->user_id) {
            return User::find($this->user_id)->name;
        } else {
            return 'Admin';
        }
    }
}
