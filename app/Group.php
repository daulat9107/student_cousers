<?php

namespace Inurture;

use Illuminate\Database\Eloquent\Model;
use Inurture\User;

class Group extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];


    public function users(){
        return $this->hasMany(User::class);
    }
}
