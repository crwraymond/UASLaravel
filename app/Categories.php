<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articles;

class Categories extends Model
{
    public function Articles()
    {
        return $this->hasMany(Articles::class);
    }
}
