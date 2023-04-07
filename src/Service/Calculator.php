<?php

namespace App\Service;

class Calculator
{
    public function getTotalHT($products)
    {
        $total = 0;
        foreach ($products as $product) {
            $total += $product['quantity'] * $product['product']->getPrice();
        }
        return $total;
    }

    public function getTotalTTC($products, $tva)
    {
        $totalHT = $this->getTotalHT($products);
        $totalTTC = $totalHT + $totalHT * ($tva / 100);
        return $totalTTC;
    }
}
