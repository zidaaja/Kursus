<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'title', 'description', 'embed_link'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
