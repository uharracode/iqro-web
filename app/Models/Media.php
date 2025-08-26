<?php

namespace App\Models;
use App\Models\HomeSetting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = [
        'home_setting_id',                                          
        'file_name',
        'original_name',
        'file_path',
        'file_type',
        'label',
        'is_main',
    ];
    public function homeSetting(): BelongsTo
    {
        return $this->belongsTo(HomeSetting::class, 'home_setting_id');
    }
}



