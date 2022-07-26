<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Putin extends Model
{
    /**
     * @var string
     */
    protected $table = 'putins';

    /**
     * @var array
     */
    protected $fillable = [
        'email','koli','item','nama','qty',
    ];
}