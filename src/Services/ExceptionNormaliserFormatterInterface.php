<?php


namespace App\Services;


use Symfony\Component\HttpFoundation\Response;

interface ExceptionNormaliserFormatterInterface
{
    public function format(string $message,int $statusCode = Response::HTTP_BAD_REQUEST):array;
}