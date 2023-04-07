<?php

namespace App\Service;

use App\Service\EmailService;

class Invoice
{
    public function __construct(
        protected EmailService $emailService,
    ) {}

    public function process($email, $totalAmount)
    {
        return $this->emailService->send($email, 'Votre commande d’un montant de ' . $totalAmount . '€ est confirmée');
    }
}
