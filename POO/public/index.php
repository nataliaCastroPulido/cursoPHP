<?php

namespace Nata;

require '../vendor/autoload.php';



Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

Log::setLogger(new HtmlLogger());

$ramm = new Unit('Ramm', new Weapons\BasicSword);

$ramm = Unit::createSoldier()
        ->setWeapon(new weapons\BasicSword())
        ->setArmor(new Armors\SilverArmor())
        ->setShield();

$silence = new Unit('Silence', new Weapons\BasicBow);

$silence->attack($ramm);

$silence->attack($ramm);

$ramm->attack($silence);