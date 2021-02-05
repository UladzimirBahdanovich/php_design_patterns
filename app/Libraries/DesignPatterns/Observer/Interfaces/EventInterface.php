<?php

namespace App\Libraries\DesignPatterns\Observer\Interfaces;

interface EventInterface{

    public function __construct(string $name, array $data = []);

    public function getName(): string ;

    public function getData(): array ;

    public function setData(array $data);
}
