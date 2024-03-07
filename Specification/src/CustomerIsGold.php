<?php

namespace App;

class CustomerIsGold{
    public function isSatisfiedBy(Customer $customer): bool
    {
        return $customer->type() == 'gold';
    }

    public function asScope($query)
    {
        return $query->where('type', 'gold');
    }
}