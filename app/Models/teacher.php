<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;



class teacher extends Model
{
    use HasTranslations;
    use HasFactory,SoftDeletes;
    protected $table = 'teachers';
    protected $guarded=[];
    public $translatable = ['name'];
}
