<?php


namespace App\Libraries\DesignPatterns\AbstractFactory\Factories;

use App\Libraries\DesignPatterns\AbstractFactory\Inputs\Bootstrap\BootstrapText;
use App\Libraries\DesignPatterns\AbstractFactory\Inputs\Bootstrap\BootstrapTextarea;
use App\Libraries\DesignPatterns\AbstractFactory\Interfaces\InputInterface;

/**
 * Class BootstrapInputFactory
 * @package App\Libraries\DesignPatterns\AbstractFactory\Factories\
 */
class BootstrapInputFactory extends AbstractInputFactory
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createText(string $name, string $id, string $class): InputInterface
    {
        return new BootstrapText($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createTextarea(string $name, string $id, string $class): InputInterface
    {
        return new BootstrapTextarea($name, $id, $class);
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
        return 'bootstrap';
    }
}
