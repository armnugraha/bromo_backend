<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contoh extends Model{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contoh';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','altitude','rank','img','type','desc','price','time','review_parrams'];
}