<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuccessfulOperationMessageResource extends JsonResource
{
    public string $message;

    public int $code;

    public function __construct($resource)
    {
        $this->message = $resource['message'];
        $this->code = $resource['code'];

        parent::__construct($resource);
    }

    /** @return array<string, string> */
    public function toArray(Request $request): array
    {
        return [
            'message' => $this->message,
            'code' => $this->code,
        ];
    }
}
