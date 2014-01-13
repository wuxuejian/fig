<?php

namespace Voy\PhpFigBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PsrControllerTest extends WebTestCase
{
    public function testPsr0()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/psr0');
    }

    public function testPsr1()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/psr1');
    }

    public function testPsr2()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/psr2');
    }

    public function testPsr3()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/psr3');
    }

    public function testPsr4()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/psr4');
    }

}
