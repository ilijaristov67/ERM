<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class BaseJsonResource extends JsonResource
{
    public function withResponse($request, $response): void
    {
        $response->setStatusCode(Response::HTTP_OK);
    }
}
