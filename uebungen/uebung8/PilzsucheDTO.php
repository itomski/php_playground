<?php

class PilzsucheDTO {

    private $x;
    private $y;
    private $btn;
    private $size;

    public function __construct(array $formData, int $arraySize)
    {
        // TODO: Prüfen, ob die x und y wirklich Zahlen sind
        $this->x = intval($formData['x'] ?? 0);
        $this->y = intval($formData['y'] ?? 0);
        $this->btn = $formData['btn'] ?? 'ungueltig';
        $this->size = $arraySize;
    }

    public function isValid(): bool {
        return ($this->x >= 0 && $this->x < $this->size) && ($this->y >= 0 && $this->y < $this->size);
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getBtn()
    {
        return $this->btn;
    }
}