<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Package extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author', 'git', 'name', 'description', 'minor', 'major', 'patch'
    ];

    public function author() {
        return $this->belongsTo('App\User', 'author', 'uuid');
    }

    use UuidForKey;

}
