<?php

namespace App;

class VeggieSub extends Sub
{

    public function addPrimaryToppings()
    {
        var_dump('adding some veggies');

        return $this;
    }


}