<?php

class Board extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


    public function users()
    {
        return $this->belongsToMany('User');
    }

    public function posts()
    {
        return $this->hasMany('Post');
    }
}
