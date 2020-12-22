<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'model', 'price', 'year', 'plate'];

        // relationship for table user and trainings
        public function user()
        {
            return $this->belongsTo('App\Models\User');
        }
}
