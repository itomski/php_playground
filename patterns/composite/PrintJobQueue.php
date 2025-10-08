<?php

class PrintJobQueue {

    private array $jobs = [];

    public function addJob(Printable $job)
    {
        $this->jobs[] = $job;
    }

    public function start()
    {
        foreach($this->jobs as $job) {
            $job->print();
        }
    }
}