<?php

use PHPUnit\Framework\TestCase;
use App\Customer;
use App\CustomerIsGold;

class CustomerIsGoldTest extends TestCase
{
    /** @test */
    function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $specification = new CustomerIsGold;

        $goldCustomer = new Customer(['name'=>'Joe','type'=>'gold']);
        $silverCustomer = new Customer(['type'=>'silver']);

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }

}