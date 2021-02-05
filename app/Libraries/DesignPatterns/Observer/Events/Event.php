<?php


namespace App\Libraries\DesignPatterns\Observer\Events;


use App\Libraries\DesignPatterns\Observer\Interfaces\EventInterface;

class Event implements EventInterface
{

    private $name;

    private $data = [];

    public function __construct(string $name, array $data = [])
    {
        $this->name = $name;
        $this->data = $data;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }
}
