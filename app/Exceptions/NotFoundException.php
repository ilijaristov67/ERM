<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class NotFoundException extends Exception
{
    private const int DEFAULT_HTTP_CODE = Response::HTTP_NOT_FOUND;

    /**
     * Render the exception into an HTTP JSON response.
     */
    public function render(): JsonResponse
    {
        return response()->json(['error' => $this->getDisplayMessage()], $this->getDisplayCode());
    }

    public function getDisplayMessage(): string
    {
        return $this->defaultMessage();
    }

    public function getDisplayCode(): int
    {
        return self::DEFAULT_HTTP_CODE;
    }

    private function defaultMessage(): string
    {
        return __('Not found');
    }
}
