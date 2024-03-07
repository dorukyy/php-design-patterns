<?php

namespace App;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected abstract function addPrimaryToppings();


    protected function layBread()
    {
        var_dump('laying down the bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('adding some lettuce');

        return $this;
    }

    protected function addSauces()
    {
        var_dump('adding sauces');

        return $this;
    }

}