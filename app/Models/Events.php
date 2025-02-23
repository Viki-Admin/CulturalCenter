<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title',
        'description',
        'id_event_type',
        'id_room',
        'date',
        'time',
        'duration',
        'price',
        'picture',
        'bigpicture',
        'id_event_script',
        'id_creator',
        'id_event_status',
    ];

    // Add links
    public function room() {
        return $this->belongsTo(Rooms::class);
    }

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class);
    }

    public function eventType() {
        return $this->belongsTo(EventTypes::class);
    }

    public function eventCreator() {
        return $this->belongsTo(EventCreators::class);
    }

    public function eventScript() {
        return $this->belongsTo(EventScripts::class);
    }

    public function exhibition() {
        return $this->belongsTo(Exhibitions::class);
    }
}
