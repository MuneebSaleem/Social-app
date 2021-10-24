<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

        protected $fillable = [];
        protected $guarded = ['id'];//secure this column (post say nhi milegi)

    public function countries() {
        return $this->belongsTo(Countries::class, 'country_id');//belongsto => one to many
    }
}
