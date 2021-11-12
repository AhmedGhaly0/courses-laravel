<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class upload_lesson extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'upload_lessons';
    public $translatable = ['name_file'];
    protected $guarded=[];
    public function lesson()
    {
        return $this->belongsTo("App\Models\lessons","lesson_id");
    }
}
