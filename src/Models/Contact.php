<?php

namespace Sedevtest\Contact\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//below class import for extends Model class 

use App\Models;

class Contact extends Model
{
    use HasFactory;

    protected $guarded=[];
}
