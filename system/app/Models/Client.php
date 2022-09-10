<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\ModelAuthenticate;

class Client extends ModelAuthenticate
{
    protected $table = 'client';
    
}
