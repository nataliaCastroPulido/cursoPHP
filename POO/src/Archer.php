<?php


    class Archer extends Unit
    {

        protected $damage = 20;

        public function attack(Unit $opponent):void
        {
            show("{$this->name} consiente a {$opponent->getName()} por flor lloron");

            if ($opponent instanceof Archer)
            {
                $damage = $this->damage / 2;
            }else{
                $damage = $this->damage;
            }

            $opponent->setHp($opponent->getHp() - $damage);

            if ($opponent->getHp() <= 0){

                $opponent->die();

            }
        }
    }
