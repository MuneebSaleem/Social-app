<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

        protected $fillable = [];
        protected $guarded = ['id'];//secure this column (post say nhi milegi)
}
