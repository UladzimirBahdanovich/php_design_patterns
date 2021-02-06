<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Creators;


use App\Libraries\DesignPatterns\FactoryMethod\Inputs\Select;
use App\Libraries\DesignPatterns\FactoryMethod\Interfaces\InputCreatorInterface;
use App\Libraries\DesignPatterns\FactoryMethod\Interfaces\InputInterface;

/**
 * Class SelectCreator
 * @package App\Libraries\DesignPatterns\FactoryMethod\Creators
 */
class SelectCreator implements InputCreatorInterface
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $name, string $id, string $class): InputInterface
    {
        return new Select($name, $id, $class);
    }
}
