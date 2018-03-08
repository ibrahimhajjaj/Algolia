<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Post extends Model
{
    use Searchable;
    //
    public function section(){

        return $this -> belongsTo('App\Section','section_id');
    }
}
