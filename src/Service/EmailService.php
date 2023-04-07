<?php

namespace App\Service;

class EmailService
{
    public function send($mail, $message)
    {
        return (bool) mt_rand(0, 1);
    }
}
