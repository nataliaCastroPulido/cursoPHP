<?php

namespace Nata\Armors;


use Nata\Armor;
use Nata\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}