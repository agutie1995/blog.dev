<?php

class Post extends BaseModel
{
    protected $table = 'tags';

	public function posts()
    {
        return $this->belongsToMany('Post');
    }
}