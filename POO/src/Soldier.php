<?php

class Soldier extends Unit
{
    public function attack($opponent):void
    {
        show("{$this->name} le da cuchillo a {$opponent->getName()} por lampara");
    }
}