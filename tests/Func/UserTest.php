<?php


namespace App\Tests\Func;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Faker\Factory;

class UserTest extends AbstractEndPoint
{
    private string $userPayload = '{"email":"%s", "password":"alprod"}';
    public function testGetUsers(): void
    {
        $response = $this->getResponseFromRequest(Request::METHOD_GET, '/api/users');
        $responseContent = $response->getContent();

        $responseDecode = json_decode($responseContent);

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);


    }

    public function testPostsUser(): void
    {
        $response = $this->getResponseFromRequest(Request::METHOD_POST,
                                                  '/api/users',
                                                  $this->getPaylaod());

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);

        self::assertEquals(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);


    }

    public function getPaylaod(): string
    {
        $fake = Factory::create();

        return sprintf($this->userPayload, $fake->email);
    }

}