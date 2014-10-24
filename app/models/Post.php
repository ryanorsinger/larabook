<?php

class Post extends \Eloquent {

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [];

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function images()
    {
        return $this->belongsToMany('Image');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function board()
    {
        return $this->belongsTo('Board');
    }
}
