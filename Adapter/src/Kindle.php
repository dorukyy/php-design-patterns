<?php

namespace Acme;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Kindle On');

    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Kindle');
    }

}