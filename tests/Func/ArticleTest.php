<?php


namespace App\Tests\Func;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleTest extends AbstractEndPoint
{
    public function testGetArticles()
    {
        $response  = $this->getResponseFromRequest(Request::METHOD_GET, '/api/articles');

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }
}