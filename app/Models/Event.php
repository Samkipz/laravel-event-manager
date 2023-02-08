<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'event_banner',
        'user_id',
        'category_id',
        'attendee_id',
        'recurrence',
        'event_id',
        'start_date',
        'lead_date'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
