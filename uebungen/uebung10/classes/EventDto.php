<?php

class EventDto {

    private $startDate;
    private $endDate;
    private $title;
    private $description;

    private $errors = [];

    function __construct(array $formData)
    {
        // TODO: Validierung
        $this->startDate = new DateTime($formData['start_date']);
        $this->startDate->modify($formData['start_time']);

        // TODO: Beim Fehler einen Eintrag in das Array Errors machen

        $this->endDate = new DateTime($formData['end_date']);
        $this->endDate->modify($formData['end_time']);

        // TODO: Bereinigung
        $this->title = strip_tags($formData['title']);

        $this->description = strip_tags($formData['description']);
    }

    function hasErrors(): bool
    {
        return count($this->errors) > 0;
    }

    function getErrors(): array
    {
        include_once('...');
        return $this->errors;
    }

    function toEvent(): Event
    {
        // Gesäuberte Daten des DTO werden zur Erzeugung eines Events verwendet
        $event = new Event();
        $event->setStartDate($this->startDate);
        $event->setEndDate($this->endDate);
        $event->setTitle($this->title);
        $event->setDescription($this->description);
        return $event;
    }
}