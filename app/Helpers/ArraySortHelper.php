<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

class ArraySortHelper
{
    protected Collection $sorts;

    public function __construct(Collection $sorts)
    {
        $this->sorts = $sorts;
    }

    public function handle(string $descending = '-'): array
    {
        $descending = $this->sorts->map(function ($sort) use ($descending) {
            return $descending.$sort;
        });

        return array_merge($this->sorts->toArray(), $descending->toArray());
    }
}
