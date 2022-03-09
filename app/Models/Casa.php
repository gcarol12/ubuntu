<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'image', 'body', 'iframe', ];

    /**
     * Returne the sluggable configuration array for this model.
     * 
     * @return array
     */
    public function sluggable(): array
    {
        return [
         'slug' => [
            'source' => 'title',
            'onUpdate' => true
               ]
        ];
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->body, 0, 140);
    }

    public function getGetImageAttribute()
    {
        if ($this->image);
        return url("storage/$this->image");
    }

    public function habitacions()
    {
        return $this->hasMany(Habitacion::class);
    }

}
