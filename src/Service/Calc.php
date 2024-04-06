<?php

namespace App\Service;

class Calc
{

    // Méthode pour additionner deux nombres
    public function addition($a, $b)
    {
        return $a + $b;
    }

    // Méthode pour soustraire deux nombres
    public function soustraction($a, $b)
    {
        return $a - $b;
    }

    // Méthode pour multiplier deux nombres
    public function multiplication($a, $b)
    {
        return $a * $b;
    }

    // Méthode pour diviser deux nombres
    public function division($a, $b)
    {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Division par zéro impossible";
        }
    }
}
