<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ResourceCollectionToArray
{
    /** @return array<string, string> */
    public function toArray(Request $request): array
    {
        return [
            'page' => $this->pagination['page'] ?? null,
            'limit' => $this->pagination['limit'] ?? null,
            'total_records' => $this->pagination['total_records'] ?? null,
            'total_pages' => $this->pagination['total_pages'] ?? null,
            'filter' => $this->pagination['filter'] ?? null,
            'state' => $this->pagination['state'] ?? null,
            'data' => $this->collection,
        ];
    }
}
