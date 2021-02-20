<?php

declare(strict_types=1);

namespace App\Events;

use App\Factory\JsonResponseInterface;
use App\Normalizer\NormalizerInterface;
use App\Services\ExceptionNormaliserFormatterInterface;
use Exception;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Serializer\SerializerInterface;

class ExceptionSubscriber implements EventSubscriberInterface
{
    private static array $normalisers;
    private SerializerInterface $serializer;
    private ExceptionNormaliserFormatterInterface $exceptionNormaliserFormatter;
    private JsonResponseInterface $jsonResponse;

    public function __construct(
        SerializerInterface $serializer,
        ExceptionNormaliserFormatterInterface $exceptionNormaliserFormatter,
        JsonResponseInterface $jsonResponse
    ) {
        $this->serializer = $serializer;
        $this->exceptionNormaliserFormatter = $exceptionNormaliserFormatter;
        $this->jsonResponse = $jsonResponse;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => [['processException', 0]],
        ];
    }

    public function processException(ExceptionEvent $event)
    {
        $result = null;

        /** @var Exception $exception */
        $exception = $event->getThrowable();
        /** @var NormalizerInterface $normaliser */
        foreach (self::$normalisers as $key => $normaliser) {
            if ($normaliser->supports($exception)) {
                $result = $normaliser->normalise($exception);
                break;
            }
        }
        if (null === $result) {
            $result = $this->exceptionNormaliserFormatter->format(
                $exception->getMessage(),
                Response::HTTP_BAD_REQUEST
            );
        }

        $event->setResponse($this->jsonResponse->getJsonResponse(
            $result['code'],
            $this->serializer->serialize($result, 'json')
        ));
    }

    public function addNormalizer(NormalizerInterface $normalizer)
    {
        self::$normalisers[] = $normalizer;
    }
}
