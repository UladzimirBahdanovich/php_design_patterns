<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Creators;


use App\Libraries\DesignPatterns\FactoryMethod\Inputs\Checkbox;
use App\Libraries\DesignPatterns\FactoryMethod\Interfaces\InputCreatorInterface;
use App\Libraries\DesignPatterns\FactoryMethod\Interfaces\InputInterface;

/**
 * Class CheckboxCreator
 * @package App\Libraries\DesignPatterns\FactoryMethod\Creators
 */
class CheckboxCreator implements InputCreatorInterface
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $name, string $id, string $class): InputInterface
    {
        return new Checkbox($name, $id, $class);
    }
}
