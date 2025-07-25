<?php

class EventManagement
{
    private $events = [];

    // private $lastCustomerId = 0;
    // private $customers = [];

    public function getEvents(): array
    {
        return $this->events;
    }

    public function addEvent(Event $event): void
    {
        $this->events[] = $event;
    }
}