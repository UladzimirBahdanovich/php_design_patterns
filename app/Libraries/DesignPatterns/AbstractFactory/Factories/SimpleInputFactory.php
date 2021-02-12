<?php


namespace App\Libraries\DesignPatterns\AbstractFactory\Factories;

use App\Libraries\DesignPatterns\AbstractFactory\Inputs\Simple\SimpleText;
use App\Libraries\DesignPatterns\AbstractFactory\Inputs\Simple\SimpleTextarea;
use App\Libraries\DesignPatterns\AbstractFactory\Interfaces\InputInterface;

/**
 * Class SimpleInputFactory
 * @package App\Libraries\DesignPatterns\AbstractFactory\Factories
 */
class SimpleInputFactory extends AbstractInputFactory
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createText(string $name, string $id, string $class): InputInterface
    {
        return new SimpleText($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createTextarea(string $name, string $id, string $class): InputInterface
    {
        return new SimpleTextarea($name, $id, $class);
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
        return 'simple';
    }
}
