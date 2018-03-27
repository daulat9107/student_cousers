<?php

namespace Inurture;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    	'course_id',
    	'name',
    	'type',
    ];

    public function user(){

    	return $this->belongsTo(User::class);
    }
}
