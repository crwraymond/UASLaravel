<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\User;
use App\Users;

class Articles extends Model
{
    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function Users()
    {   
        return $this->belongsTo(User::class);
    }
}
