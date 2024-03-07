<?php

namespace Acme;

class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Nook On');

    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Nook');
    }

}