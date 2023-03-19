<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Openspace extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'openspace';
    // protected $primaryKey = 'id';
     public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = [
        'user_id',
        'name',
        'latitude',
        'longitude',
     ];
    // protected $hidden = [];
    // protected $dates = [];
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}