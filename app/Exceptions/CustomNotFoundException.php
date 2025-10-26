<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class CustomNotFoundException extends Exception
{
    private const int DEFAULT_HTTP_CODE = Response::HTTP_NOT_FOUND;

    public function __construct(
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

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
        return __('Not found.');
    }
}
