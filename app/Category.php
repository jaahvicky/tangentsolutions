<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * A Category can have many posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function posts()
    {

        return $this->hasMany('App\Posts');
    }
}
