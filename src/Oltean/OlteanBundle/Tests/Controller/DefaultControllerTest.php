<?php

namespace Oltean\OlteanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Otean/Home');

        $this->assertTrue($crawler->filter('html:contains("Bun venit")')->count() > 0);
    }
}
