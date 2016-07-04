<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model  {


    protected $fillable = [
        'question',
        'answer',
        'status'
    ];

    protected $dates = ['created_at', 'updated_at'];


    public function scopePublish($query)
    {
        $query->where('status', true);
    }

}
