<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    //

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'user_id',
        'image_url',
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
