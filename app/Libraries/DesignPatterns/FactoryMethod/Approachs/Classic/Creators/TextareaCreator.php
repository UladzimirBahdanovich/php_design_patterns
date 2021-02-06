<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators;


use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Inputs\Textarea;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Interfaces\InputCreatorInterface;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Interfaces\InputInterface;

/**
 * Class TextareaCreator
 * @package App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators
 */
class TextareaCreator implements InputCreatorInterface
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $name, string $id, string $class): InputInterface
    {
        return new Textarea($name, $id, $class);
    }
}
