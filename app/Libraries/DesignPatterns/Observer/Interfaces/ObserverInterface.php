<?php

namespace App\Libraries\DesignPatterns\Observer\Interfaces;

interface ObserverInterface{

    public function handleEvent(EventInterface $observable);
}
