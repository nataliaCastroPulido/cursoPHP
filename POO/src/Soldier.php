<?php

/*class Soldier extends Unit
{
    public function attack($opponent):void
    {
        protected $damage = 40:
        protected $armor;

        public function __construct(string $name)
        {
            parent::__construct($name);
        }



        public function attack(Unit $opponent)
        {
            show(
                "{$this->name} ataca con la espada a {$opponent->getName()}"
            );

            $opponent->takeDamage($this->damage);
        }

        protected function absorbDamage($damage)
        {
            if ($this->armor){

            }
        }

    }
}