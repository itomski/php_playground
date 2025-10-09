<?php

function uuidv4() {
    $data = random_bytes(16);

    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

class Thing {

    private string $id;
    private string $name;
    private string $description;

    function __construct(string $name, string $description = '')
    {
        $this->id = uuidv4();
        $this->name = $name;
        $this->description = $description;
    }

    function __serialize(): array // früher __sleep
    {
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }

    function __unserialize(array $data): void // __wakeup
    {
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->id = uuidv4();
    }
}

const FILE_NAME = 'things.data';

$t1 = new Thing('Tasse', 'Keramik, gelb');
print_r($t1);

echo '<br>';

//file_put_contents(FILE_NAME, serialize($t1));
$t1 = unserialize(file_get_contents(FILE_NAME));
print_r($t1);