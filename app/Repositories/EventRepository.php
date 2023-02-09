<?php

namespace App\Repositories;

use App\Interfaces\EventRepositoryInterface;
use App\Models\Event;

class EventRepository implements EventRepositoryInterface
{
    public function getAllEvents()
    {
        return Event::all();
    }
    public function getEventById($eventId)
    {
        return Event::findOrFail($eventId);
    }
    public function deleteEvent($eventId)
    {
        Event::destroy($eventId);
    }
    public function createEvent(array $eventDetails)
    {
        return Event::create($eventDetails);
    }
    public function updateEvent($eventId, array $newDetails)
    {
        return Event::whereId($eventId)->update($newDetails);
    }

}
