<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'home_id',
        'email',
        'phone',
        'address',
        'zip_code'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function about()
    {
        return $this->hasMany(About::class);
    }
}
