<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'home_id',
        'contact_id',
        'birth_date',
        'website',
        'city',
        'degree',
        'freelance'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
