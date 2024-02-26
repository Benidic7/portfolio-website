<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resume extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'home_id',
        'summary'
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
