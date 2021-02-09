<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Response;

class ExceptionNormalizerFormatter implements ExceptionNormaliserFormatterInterface
{
    public function format(string $message, int $statusCode = Response::HTTP_BAD_REQUEST): array
    {
        return [
            'code' => $statusCode,
            'message' => $message,
        ];
    }
}
