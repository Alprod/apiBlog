<?php


namespace App\Tests\Func;

use App\DataFixtures\AppFixtures;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Faker\Factory;

class UserTest extends AbstractEndPoint
{
    private string $userPayload = '{"email":"%s", "password":"alprod"}';

    public function testGetUsers(): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_GET,
            '/api/users',
        '',
        [],
        false
        );
        $responseContent = $response->getContent();

        $responseDecode = json_decode($responseContent);

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);


    }

    public function testPostsUser(): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_POST,
            '/api/users',
            $this->getPayload(),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);

        self::assertEquals(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }

    public function testGetDefaultUser(): int
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_GET,
            '/api/users',
            '',
            ["email" => AppFixtures::DEFAULT_USER['email']],
            false
        );
        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent, true);
        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);

    }

    public function getPayload(): string
    {
        $fake = Factory::create();

        return sprintf($this->userPayload, $fake->email);
    }

}