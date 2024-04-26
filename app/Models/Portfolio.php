<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'category',
        'client',
        'project_date',
        'project_description'
    ];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}
