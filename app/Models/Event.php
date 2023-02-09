<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'color',
        'start_time',
        'end_time',
        'recurrence',
        'event_banner',
        'event_creator_id',
        'attendee_id',
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
