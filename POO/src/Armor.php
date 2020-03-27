<?php

namespace Nata;

abstract class Armor
{
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isMagical()){
            return $this->absorbMagicalDamage($attack);
        }

        return $this->absorbPhysicalDamage($attack);
    }

    public function absorbPhysicalDamage(Attack $attack)
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage();
        }

        return $attack->getDamage();
    }

    public function absorbMagicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}