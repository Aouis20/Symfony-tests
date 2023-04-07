<?php

namespace App\Tests;

use App\Service\EmailService;
use App\Service\Invoice;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InvoiceTest extends KernelTestCase
{
    public function testEmailMock()
    {
        //Dummy object
        $emailServiceMock = $this->createMock(EmailService::class);

        //On transforme le stub object en mock en s’attendant à ce que la méthode soit appelée une fois. Si elle n’est pas appelée une fois alors le test échoue.
        $emailServiceMock
            ->expects($this->once())
            ->method('send')
            ->willReturn(true);

        $invoice = new Invoice($emailServiceMock);

        $result = $invoice->process('aouiscb@gmail.com', 123);
        $this->assertTrue($result);
    }
}
