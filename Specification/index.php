<?php



class Customer{
    public function isGold(){
        return $this->type == 'gold';
    }
}

$spec = new CustomerIsGold;

$spec->isSatisfiedBy($customer); // true or false