<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();
        $this->$client->request('GET', '/login');

        $crawler = $client->submitForm('login', [
            '_username' => 'j.doe@mail.com',
            '_password' => '123456',
        ]);

        $this->assertResponseRedirects();
        $crawler = $client->followRedirect();
        $this->assertSelectorTextContains('button', 'Logout');
    }
}
