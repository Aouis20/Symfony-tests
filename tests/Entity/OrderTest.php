<?php

namespace App\Tests\Entity;

use App\Entity\User;
use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderTest extends KernelTestCase
{
    public function testOrderEntity()
    {
        $order = new Order();
        $order->setNumber("az68ghip");
        $order->setTotalPrice(100);
        $order->setUserId($this->getUser());

        $this->assertEquals("az68ghip", $order->getNumber());
        $this->assertEquals(100, $order->getTotalPrice());
        $this->assertEquals("j.doe@mail.com", $order->getUserId()->getEmail());
    }

    public function getUser()
    {
        $user = new User();
        $user->setEmail("j.doe@mail.com");
        return $user;
    }
}
