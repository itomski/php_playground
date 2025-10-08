<?php

// Create Read Update Delete

interface Crud {

    public function find(): array;

    public function findById(int $id): ?object;

    public function insert(object $obj): bool;

    public function update(object $obj): bool;

    public function delete(object $obj): bool;

    public function deleteById(int $id): bool;

}