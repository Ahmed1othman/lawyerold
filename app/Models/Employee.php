<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public $translatable = ['title','name'];
    protected $fillable = [
        'title',
        'name',
        'photo',
        'active',
    ];

    public $appends=['image'];


    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/employees/'.$this->attributes['photo'] ) : null;
    }
}
