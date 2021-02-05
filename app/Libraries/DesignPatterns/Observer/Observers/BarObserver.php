<?php

namespace App\Libraries\DesignPatterns\Observer\Observers;

use App\Libraries\DesignPatterns\Observer\Interfaces\EventInterface;
use App\Libraries\DesignPatterns\Observer\Interfaces\ObserverInterface;

class BarObserver implements ObserverInterface
{

    public function handleEvent(EventInterface $event)
    {
        var_dump($event->getName());
        var_dump($event->getData());
    }
}
