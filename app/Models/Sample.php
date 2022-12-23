<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'format', 'size'];

    function vfxes(){

        return $this->belongsTo('App\Models\Vfx');

    }
}
