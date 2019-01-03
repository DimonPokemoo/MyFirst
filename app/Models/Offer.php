<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    const OBJECT_LAPTOP = 'laptop';
    const OBJECT_TV = 'tv';


    public static $typeObject =  [
        self::OBJECT_LAPTOP, self::OBJECT_TV,
    ];

    protected $table = 'offers';
    protected $fillable = [
        'type_object', 'brand', 'price', 'currency', 'phone', 'extra_data', 'user_id', 'store_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
