<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Courses extends Model
{
    use HasTranslations;
    use HasFactory,SoftDeletes;
    protected $table = 'courses';
    protected $guarded=[];
    public $translatable = ['name'];

    public function teacher()
    {
        return $this->belongsTo("App\Models\\teacher","teacher_id");
    }
}
