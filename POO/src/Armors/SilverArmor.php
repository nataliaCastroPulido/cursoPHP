<?php

namespace Nata\Armors;

use Nata\Armor;
use Nata\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {

            return $attack->getDamage() / 3;

    }

}