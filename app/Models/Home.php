<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'position',
        'description',
        'cv',
        'propic',
        'facebook',
        'instagram',
        'linkedin',
        'github'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function abouts()
    {
        return $this->hasMany(About::class);
    }

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

}
