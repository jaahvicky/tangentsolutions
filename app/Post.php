<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * A post belongs to a User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {

        return $this->belongsTo('App\User');
    }

    /**
     * A post belongs to a Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {

        return $this->belongsTo('App\Category');
    }
    /**
     * A Post can have many comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function comments()
    {

        return $this->hasMany('App\Comments');
    }

}
