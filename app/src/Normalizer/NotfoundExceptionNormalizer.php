<?php

namespace App\Normalizer;

use Symfony\Component\HttpFoundation\Response;

class NotfoundExceptionNormalizer extends AbstractNormaliser
{
    public function normalise(\Exception $exception): array
    {
        return $this->exceptionNormaliserFormatter->format(
            $exception->getMessage(),
            Response::HTTP_NOT_FOUND
        );
    }
}
