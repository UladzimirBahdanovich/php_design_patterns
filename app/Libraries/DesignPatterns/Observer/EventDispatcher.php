<?php


namespace App\Libraries\DesignPatterns\Observer;


use App\Libraries\DesignPatterns\Observer\Interfaces\EventDispatcherInterface;
use App\Libraries\DesignPatterns\Observer\Interfaces\EventInterface;
use App\Libraries\DesignPatterns\Observer\Interfaces\ObserverInterface;

class EventDispatcher implements EventDispatcherInterface
{

    /**
     * @var array
     */
    public $observers = [];

    public function addObserver(string $eventName, ObserverInterface $observer)
    {

        $this->observers[$eventName][get_class($observer)] = $observer;
    }

    public function removeObserver(string $eventName, ObserverInterface $observer)
    {
        unset($this->observers[$eventName][get_class($observer)]);
    }

    public function dispatch(EventInterface $event)
    {
        foreach ($this->observers[$event->getName()] as $observer){

            $observer->handleEvent($event);
        }
    }
}
