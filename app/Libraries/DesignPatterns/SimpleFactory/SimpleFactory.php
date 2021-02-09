<?php


namespace App\Libraries\DesignPatterns\SimpleFactory;


use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Checkbox;
use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Select;
use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Text;
use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Textarea;
use App\Libraries\DesignPatterns\SimpleFactory\Interfaces\InputInterface;
use App\Libraries\DesignPatterns\SimpleFactory\Interfaces\SimpleFactoryInterface;

/**
 * Class SimpleFactory
 * @package App\Libraries\DesignPatterns\SimpleFactory
 */
class SimpleFactory implements SimpleFactoryInterface
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createText(string $name, string $id, string $class): InputInterface
    {
        return new Text($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createTextarea(string $name, string $id, string $class): InputInterface
    {
        return new Textarea($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createCheckbox(string $name, string $id, string $class): InputInterface
    {
        return new Checkbox($name, $id, $class);
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createSelect(string $name, string $id, string $class): InputInterface
    {
        return new Select($name, $id, $class);
    }
}
