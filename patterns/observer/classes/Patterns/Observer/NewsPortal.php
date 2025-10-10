<?php

declare(strict_types = 1);

namespace Patterns\Observer;

use \SplObjectStorage;
use \SplSubject;

class NewsPortal implements SplSubject {

    private string $name;
    private string $msg;

    private SplObjectStorage $observers;

    function __construct(string $name)
    {
        $this->observers = new SplObjectStorage;
        $this->name = $name;
    }

    public function attach(\SplObserver $observer): void {
        $this->observers->attach($observer); // Observer wird angemeldet
    }

    public function detach(\SplObserver $observer): void {
        $this->observers->detach($observer); // Observer angemeldet sich ab
    }

    public function notify(): void {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg.' > Nachricht von: '.$this->name;
        $this->notify();
    }
}