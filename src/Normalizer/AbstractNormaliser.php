<?php

declare(strict_types=1);

namespace App\Normalizer;


use App\Services\ExceptionNormaliserFormatterInterface;

abstract class AbstractNormaliser implements NormalizerInterface
{
    private array $exceptionTypes;
    protected ExceptionNormaliserFormatterInterface $exceptionNormaliserFormatter;

    public function __construct(
        array $exceptionTypes,
        ExceptionNormaliserFormatterInterface $exceptionNormaliserFormatter
    ) {
        $this -> exceptionTypes = $exceptionTypes;
        $this -> exceptionNormaliserFormatter = $exceptionNormaliserFormatter;
    }

    public function supports(\Exception $exception): bool
    {
        return in_array(get_class($exception), $this->exceptionTypes, true);
    }
}