<?php


namespace App\Tests\Func;


use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleTest extends AbstractEndPoint
{
    public function testArticles(): array
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_GET,
            '/api/articles',
            '',
            [],
            false
        );
        $responseContent = $response->getContent();
        $responseDecoded = json_decode($responseContent);
        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecoded);

        return $responseDecoded;
    }


    /**
     * @param array $res
     * @return void
     * @throws Exception
     * @depends testArticles
     */
    public function testGetArticles(array $res): void
    {
        if(0 === count($res)){
            throw new Exception("Use this command => bin/console d:f:l (no data found)", 404);
        }


        $response = $this->getResponseFromRequest(
            Request::METHOD_GET,
            '/api/articles/'.$res[0]->id,
            '',
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
        self::assertNotSame($res[0], $responseDecode);
    }
}