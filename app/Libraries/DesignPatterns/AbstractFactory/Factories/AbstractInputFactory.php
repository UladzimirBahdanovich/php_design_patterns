<?php


namespace App\Libraries\DesignPatterns\AbstractFactory\Factories;


use App\Libraries\DesignPatterns\AbstractFactory\Interfaces\InputInterface;

/**
 * Class AbstractInputFactory
 * @package App\Libraries\DesignPatterns\AbstractFactory\Factories
 */
abstract class AbstractInputFactory
{
    /**
     * @return string
     */
    abstract public function getType(): string;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    abstract public function createText(string $name, string $id, string $class): InputInterface;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    abstract public function createTextarea(string $name, string $id, string $class): InputInterface;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    abstract public function createCheckbox(string $name, string $id, string $class): InputInterface;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    abstract public function createSelect(string $name, string $id, string $class): InputInterface;
}
