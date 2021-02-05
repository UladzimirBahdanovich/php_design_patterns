<?php

namespace App\Libraries\DesignPatterns\Observer\Interfaces;

interface EventDispatcherInterface{

    public function addObserver(string $eventName, ObserverInterface $observer);

    public function removeObserver(string $eventName, ObserverInterface $observer);

    public function dispatch(EventInterface $event);
}

