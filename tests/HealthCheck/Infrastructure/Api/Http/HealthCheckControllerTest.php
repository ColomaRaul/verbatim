<?php

declare(strict_types=1);

namespace App\Tests\HealthCheck\Infrastructure\Api\Http;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HealthCheckControllerTest extends WebTestCase
{
    public function testHealthCheckReturnsOk(): void
    {
        $client = static::createClient();
        $client->request('GET', '/health-check');

        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());
        $this->assertEquals(['status' => 'ok'], json_decode($client->getResponse()->getContent(), true));
    }
}
