<?php

function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit
{

    protected $hp = 40;
    Protected $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    Public function move(string $direction):void
    {
        show("{$this->name} avanza hacia $direction");
    }

    public function attack(Unit $opponent):void
    {
        show("{$this->name} ataca a $opponent");
    }

    public function getName():string
    {
        return $this->name;
    }

    public function die():void
    {
        show("{$this->name} ha fallecido");
    }

    public function setHp(int $points)
    {
        $this->hp = $points;

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }

    public function getHp():int
    {
        return $this->hp;
    }
}