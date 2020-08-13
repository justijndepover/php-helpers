<?php

namespace \JustijnDepover\Helpers;

class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function render()
    {
        return '€' . number_format($this->amount, 2, ',', '');
    }
}
