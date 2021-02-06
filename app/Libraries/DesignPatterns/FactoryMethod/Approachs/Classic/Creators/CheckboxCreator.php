<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators;


use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Inputs\Checkbox;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Interfaces\InputCreatorInterface;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Interfaces\InputInterface;

/**
 * Class CheckboxCreator
 * @package App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators
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
