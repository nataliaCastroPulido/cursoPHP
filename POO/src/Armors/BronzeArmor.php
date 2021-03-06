<?php

namespace Nata\Armors;

use Nata\Armor;
use Nata\Attack;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }

}