<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $table = 'home_settings';
    protected $fillable = [
    'title',
    'path_image',
    'path_video', // Pastikan kolom ini ada di $fillable
    'url_click',
    'type',
    'posisi',
    'created_by',
    'updated_by',
];

}
