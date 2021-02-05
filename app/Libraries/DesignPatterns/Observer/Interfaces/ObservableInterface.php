<?php

namespace App\Libraries\DesignPatterns\Observer\Interfaces;

interface ObservableInterface{

    public function addObserver(ObserverInterface $observer);

    public function removeObserver(ObserverInterface $observer);

    public function notifyObservers();
}
