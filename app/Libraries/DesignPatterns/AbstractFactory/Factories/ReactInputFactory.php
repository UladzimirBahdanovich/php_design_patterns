<?php


namespace App\Libraries\DesignPatterns\AbstractFactory\Factories;

use App\Libraries\DesignPatterns\AbstractFactory\Inputs\React\ReactText;
use App\Libraries\DesignPatterns\AbstractFactory\Inputs\React\ReactTextarea;
use App\Libraries\DesignPatterns\AbstractFactory\Interfaces\InputInterface;

/**
 * Class ReactInputFactory
 * @package App\Libraries\DesignPatterns\AbstractFactory\Factories
 */
class ReactInputFactory extends AbstractInputFactory
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createText(string $name, string $id, string $class): InputInterface
    {
        return new ReactText($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createTextarea(string $name, string $id, string $class): InputInterface
    {
        return new ReactTextarea($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createCheckbox(string $name, string $id, string $class): InputInterface
    {
        // TODO: Implement createCheckbox() method.
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createSelect(string $name, string $id, string $class): InputInterface
    {
        // TODO: Implement createSelect() method.
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'react';
    }
}
