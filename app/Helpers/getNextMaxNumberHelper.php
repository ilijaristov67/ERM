<?php

namespace App\Helpers;

class getNextMaxNumberHelper
{
    public function __construct(protected mixed $maxNumber) {}

    public function handle(): int
    {
        return (int) ($this->maxNumber ? $this->maxNumber + 1 : $this->maxNumber);
    }
}
