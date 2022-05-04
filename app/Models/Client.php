<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Client extends Model
{
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;
    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'photo',
    ];


    public $appends = ['image'];


    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/clients/' . $this->attributes['photo']) : null;

    }
}
