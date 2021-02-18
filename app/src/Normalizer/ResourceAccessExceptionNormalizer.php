<?php

declare(strict_types=1);

namespace App\Normalizer;

use Symfony\Component\HttpFoundation\Response;

class ResourceAccessExceptionNormalizer extends AbstractNormaliser
{
    public function normalise(\Exception $exception): array
    {
        return $this->exceptionNormaliserFormatter->format(
            $exception->getMessage(),
            Response::HTTP_UNAUTHORIZED
        );
    }
}
