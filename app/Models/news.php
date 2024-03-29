<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class news extends Model
{
    use HasFactory;
    use SoftDeletes;


    use HasTranslations;

    public $translatable = ['title','notes'];

    protected $fillable = [
        'title',
        'notes',
        'active',
    ];
    
}
