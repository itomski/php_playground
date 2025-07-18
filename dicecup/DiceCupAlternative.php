<?php

require_once 'Faces.php';

class DiceCupAlternative {

    private $faces;

    public function __construct(Faces $faces)
    {
        $this->faces = $faces;
    }

    public function changeFaces(Faces $faces) 
    {
        $this->faces = $faces;
    }

     public function rollSingle(): int {
        return rand(1, $this->faces->get());
    }

    public function roll(int $count): array {

        $results = [];
        for($i=0; $i < $count; $i++) { 
            $results[] = $this->rollSingle();
        }
        return $results;
    }
}