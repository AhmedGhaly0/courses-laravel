<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Courses;

class lessons extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'lessons';
    public $translatable = ['name'];
    protected $guarded=[];

    public function course()
    {
        return $this->belongsTo("App\Models\Courses","course_id");
    }
}
