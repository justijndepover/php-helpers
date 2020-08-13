<?php

use JustijnDepover\Helpers\Money;

if (!function_exists('money')) {
    function money($amount)
    {
        return (new Money($amount))->render();
    }
}
