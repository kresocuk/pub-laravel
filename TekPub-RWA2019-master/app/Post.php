<?php namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Rateable;
}
