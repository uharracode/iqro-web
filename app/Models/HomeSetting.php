<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;
    protected $table = 'home_settings';
    protected $fillable = [
    'title',// Pastikan kolom ini ada di $fillable
    'video_path',
    'url_click',
    'type',
    'posisi',
    'created_by',
    'updated_by',
];

public function media(): HasMany
{
     return $this->hasMany(Media::class, 'home_setting_id');
}

}
