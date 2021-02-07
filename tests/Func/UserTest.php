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

    public function testPostsUser(): int
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_POST,
            '/api/users',
            $this->getPayload(),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent, true);
        self::assertEquals(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);

        return $responseDecode['id'];
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

        return $responseDecode[0]['id'];
    }


    /**
     * @depends testGetDefaultUser
     * @param int $id
     */
    public function testPutDefaultUser(int $id): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_PUT,
            '/api/users/'.$id,
            $this->getPayload(),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);
        self::assertEquals(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }

    /**
     * @depends testGetDefaultUser
     * @param int $id
     */
    public function testPatchDefaultUser(int $id): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_PATCH,
            '/api/users/'.$id,
            $this->getPayload(),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);
        self::assertEquals(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }

    /**
     * @depends testGetDefaultUser
     * @param int $id
     */
    public function testDeleteDefaultUser(int $id): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_DELETE,
            '/api/users/'.$id,
            $this->getPayload(),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);
        self::assertEquals(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }

    /**
     * @depends testPostsUser
     * @param int $id
     */
    public function testDeleteOtherUserWithJWT(int $id): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_DELETE,
            '/api/users/'.$id
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent, true);
        self::assertEquals(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }


    /**
     * @depends testGetDefaultUser
     * @param int $id
     * @return int
     */
    public function testDeleteDefaultUserWithJWT(int $id): int
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_DELETE,
            '/api/users/'.$id
        );
        self::assertEquals(Response::HTTP_NO_CONTENT, $response->getStatusCode());
    }

    public function testPostsDefaultUser(): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_POST,
            '/api/users',
            json_encode(AppFixtures::DEFAULT_USER),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent, true);
        self::assertEquals(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }

    public function testPostsSameDefaultUser(): void
    {
        $response = $this->getResponseFromRequest(
            Request::METHOD_POST,
            '/api/users',
            json_encode(AppFixtures::DEFAULT_USER),
            [],
            false
        );

        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent, true);
        self::assertEquals(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
        self::assertJson($responseContent);
        self::assertNotEmpty($responseDecode);
    }


    /**
     * @return string
     */
    public function getPayload(): string
    {
        $fake = Factory::create();

        return sprintf($this->userPayload, $fake->email);
    }

}